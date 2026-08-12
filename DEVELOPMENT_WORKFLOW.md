# Morrischem Website Development Workflow

This repository uses a strict development workflow centered around GitHub.

## Source of Truth
GitHub (https://github.com/henryus121/morrischem-website) is the ONLY authoritative source of truth.

## Workflow Phases

### Entry Gate (Pre-Development)
1. **Verify State:** Read the current state of GitHub `main` and verify the commit hash.
2. **Create Recovery Point:** Create and push a GitHub tag (e.g., `recovery-<commit_sha>`) BEFORE any modifications.
3. **Branching:** Create a dedicated development branch from that exact recovery point.

### Exit Gate (Pre-Merge)
1. **Review:** Perform a complete diff review.
2. **Validate:** Run appropriate validation checks.
3. **Pull Request:** Push the development branch and create a Pull Request against `main`.
4. **Approval:** A PR must be reviewed and explicitly approved before merging into `main`.
5. **Verify:** After merge, verify the new `main` commit.

## Enforcement
`main` is protected to require pull request reviews before merging.
