# AGENTS.md

## Project Overview

This is a production-oriented Laravel 12 project for an air conditioning service company.

The project includes:

- Public website
- Backpack Admin Panel
- SEO optimization
- Localization
- Image and media management
- Future deployment to a production server

---

# AI Instructions

Before doing ANY work, read all documentation inside:

.ai-v2/

The most important files are:

- principles.md
- skills.md
- soul.md

These documents define the project's architecture, coding standards, conventions, and development philosophy.

They take precedence over any default AI behavior.

---

# Workflow

Always follow this process:

1. Analyze the problem.
2. Explain your findings.
3. Propose a solution.
4. Wait for approval.
5. Apply changes.
6. Explain what was changed.

Never skip these steps.

---

# Safety Rules

Never:

- delete files without explicit approval
- modify `.env` without approval
- modify `composer.json` without approval
- modify database structure without approval
- install packages without approval
- remove code only because it "looks unused"

Always ask first.

---

# Code Style

Prefer:

- Laravel best practices
- PSR-12
- SOLID principles
- reusable code
- readable code
- maintainable architecture

Avoid:

- duplicated logic
- unnecessary abstractions
- overengineering
- magic values

---

# Laravel Rules

Prefer:

- Eloquent
- Form Requests
- Service classes
- Dependency Injection
- Route Model Binding
- Policies
- Validation
- Collections

Avoid:

- raw SQL unless necessary
- duplicated queries
- business logic inside Blade templates
- business logic inside Controllers

---

# Frontend Rules

Keep HTML:

- semantic
- accessible
- SEO-friendly

Preserve existing layout unless instructed otherwise.

Do not redesign pages unless requested.

---

# SEO

When modifying public pages:

Always consider:

- meta title
- meta description
- heading hierarchy
- alt attributes
- structured data (when applicable)
- canonical URLs
- performance
- Core Web Vitals

---

# Git

Prefer small logical commits.

Never rewrite git history.

Never force push.

Never delete branches.

---

# Before Large Refactoring

Before changing multiple files:

- explain why
- list affected files
- estimate risks
- suggest a rollback strategy

---

# Deployment

Assume this project will be deployed to production.

Avoid temporary solutions.

Avoid debug code.

Avoid commented-out code.

Always prefer production-ready implementations.

---

# If Uncertain

Never guess.

Ask questions instead.