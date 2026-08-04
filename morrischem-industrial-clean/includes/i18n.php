<?php
define('DEFAULT_LANG', 'en');
$allowed_langs = ['en', 'ru', 'uk', 'tr', 'az', 'ar', 'es', 'fr', 'de'];

// 1. Language Resolution Pipeline: Query Param -> Cookie -> Default
$lang = $_GET['lang'] ?? $_COOKIE['mc_lang'] ?? DEFAULT_LANG;
if (!in_array($lang, $allowed_langs)) {
    $lang = DEFAULT_LANG;
}

// 2. Cookie Isolation Handler
if (!headers_sent() && ($_COOKIE['mc_lang'] ?? '') !== $lang) {
    setcookie('mc_lang', $lang, [
        'expires'  => time() + (86400 * 365),
        'path'     => '/',
        'secure'   => true,
        'httponly' => false,
        'samesite' => 'Lax'
    ]);
}

$dir = ($lang === 'ar') ? 'rtl' : 'ltr';

/**
 * Loads and traverses a dictionary namespace.
 */
function load_dictionary_value($language, $namespace, $key_path) {
    static $loaded_dicts = [];

    if (!isset($loaded_dicts[$language][$namespace])) {
        $file = __DIR__ . "/../locales/{$language}/{$namespace}.json";
        if (file_exists($file)) {
            $loaded_dicts[$language][$namespace] = json_decode(file_get_contents($file), true) ?? [];
        } else {
            $loaded_dicts[$language][$namespace] = [];
        }
    }

    $keys = explode('.', $key_path);
    $node = $loaded_dicts[$language][$namespace];

    foreach ($keys as $k) {
        if (is_array($node) && isset($node[$k])) {
            $node = $node[$k];
        } else {
            return null; // Key path does not exist
        }
    }

    return $node;
}

/**
 * Secure Translation Helper
 * Enforces per-key 'reviewed' status check, rejects unwrapped strings in non-English locales,
 * and falls back cleanly to English ('en').
 */
function __t($key, $namespace = 'common', $default = '') {
    global $lang;

    // A. Target Language Pass
    $node = load_dictionary_value($lang, $namespace, $key);

    if ($node !== null) {
        // Master English ('en') allows flat strings directly
        if (is_string($node) && $lang === DEFAULT_LANG) {
            return $node;
        }

        // Non-English flat string: TREAT AS UNREVIEWED & LOG WARNING
        if (is_string($node) && $lang !== DEFAULT_LANG) {
            error_log("i18n Liability Alert: Unwrapped translation string detected in non-English locale: [{$lang}/{$namespace}.json] key: '{$key}'");
            // Fall through to Pass B (English Fallback)
        }

        // Standard Wrapped Schema Check
        if (is_array($node) && isset($node['val'])) {
            $is_reviewed = $node['reviewed'] ?? false;
            if ($is_reviewed || $lang === DEFAULT_LANG) {
                return $node['val'];
            }
        }
    }

    // B. Fallback Pass: Unreviewed, Missing, or Unwrapped Key -> Query Master English ('en')
    if ($lang !== DEFAULT_LANG) {
        $en_node = load_dictionary_value(DEFAULT_LANG, $namespace, $key);
        if ($en_node !== null) {
            if (is_string($en_node)) {
                return $en_node;
            }
            if (is_array($en_node) && isset($en_node['val'])) {
                return $en_node['val'];
            }
        }
    }

    // C. Hard Fallback (If missing in both Target and Master English)
    return $default ?: $key;
}

/**
 * Render the persistent language selector UI.
 */
function render_language_selector() {
    global $allowed_langs, $lang;

    $lang_names = [
        'en' => 'EN', 'es' => 'ES', 'fr' => 'FR',
        'de' => 'DE', 'ru' => 'RU', 'tr' => 'TR',
        'uk' => 'UK', 'ar' => 'AR', 'az' => 'AZ'
    ];

    $html = '<div class="language-switcher" style="position: fixed; top: 16px; right: 16px; z-index: 999;">';
    $html .= '<form action="" method="GET" style="margin:0;">';
    $html .= '<select name="lang" onchange="this.form.submit()" style="padding: 6px 10px; border-radius: 4px; font-weight: bold; cursor: pointer;">';

    foreach ($allowed_langs as $code) {
        $selected = ($lang === $code) ? 'selected' : '';
        $name = $lang_names[$code] ?? strtoupper($code);
        $html .= '<option value="' . htmlspecialchars($code, ENT_QUOTES, 'UTF-8') . '" ' . $selected . '>' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</option>';
    }

    $html .= '</select>';
    $html .= '</form>';
    $html .= '</div>';

    return $html;
}