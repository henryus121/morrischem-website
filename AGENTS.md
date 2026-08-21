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

## graphify

This project has a knowledge graph at graphify-out/ with god nodes, community structure, and cross-file relationships.

When the user types `/graphify`, use the installed graphify skill or instructions before doing anything else.

Rules:
- For codebase questions, first run `graphify query "<question>"` when graphify-out/graph.json exists. Use `graphify path "<A>" "<B>"` for relationships and `graphify explain "<concept>"` for focused concepts. These return a scoped subgraph, usually much smaller than GRAPH_REPORT.md or raw grep output.
- Dirty graphify-out/ files are expected after hooks or incremental updates; dirty graph files are not a reason to skip graphify. Only skip graphify if the task is about stale or incorrect graph output, or the user explicitly says not to use it.
- If graphify-out/wiki/index.md exists, use it for broad navigation instead of raw source browsing.
- Read graphify-out/GRAPH_REPORT.md only for broad architecture review or when query/path/explain do not surface enough context.
- After modifying code, run `graphify update .` to keep the graph current (AST-only, no API cost).
