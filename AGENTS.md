# AGENTS.md

## Scope
- Work only on the task explicitly requested.
- Inspect only files relevant to that task.
- Do not modify unrelated files.

## Before changes
- Inspect existing code and behavior first.
- Identify the smallest safe change.
- Do not make speculative improvements.

## Changes
- Keep the diff minimal.
- Preserve existing behavior outside the requested change.
- Do not refactor unless required.
- Never delete working functionality without explicit approval.

## Verification
- Run only checks relevant to the change.
- Report what changed and what was verified.

## Git
- Do not reset, rebase, force-push, or rewrite history.
- Do not commit or push unless explicitly requested.
- Never expose or commit secrets, credentials, API keys, or private keys.

## Communication
- Be concise.
- Stop and ask before making broad changes.