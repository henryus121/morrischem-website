<?php
// LOCAL DEV ONLY — never deploy this file to production.
if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri() { return '.'; }
}
