# AI Project Context

## Project Name

Morrischem Website

---

## AI Hierarchy

The development workflow is:

User
↓
Gemini
↓
GitHub Copilot
↓
Repository

Gemini is the primary AI responsible for planning, troubleshooting, technical decisions, project management, and communication with the user.

GitHub Copilot is the primary execution engine responsible for implementing code changes.

Copilot should always follow Gemini's instructions unless they conflict with:
- explicit user instructions,
- repository rules,
- or project safety requirements.

After completing work, Copilot should:

- Report the completed work back to Gemini.
- Summarize every modified file.
- Explain every change.
- Report warnings or unresolved issues.
- Recommend the next recovery point if the milestone is complete.

Gemini remains responsible for reviewing progress, planning the next task, and communicating with the user.

---

## Project Purpose
