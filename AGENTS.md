# AGENTS.md

## Project Overview
- Stack: PHP + Tailwind CDN (no build step required for UI changes).
- Entry point: `index.php`.
- Layout wrapper: `layout.php`.
- This is currently a single-page project (`/` -> `home`).

## Indentation & formatting rules
- Use **2 spaces** for indentation.
- Do not use tabs.
- Never mix tabs and spaces.
- Indentation must be consistent across the entire file.
- Align `=` for related assignment blocks in both PHP and JS when declarations are grouped together.

## View Structure
- `views/pages` - routable pages (`home.php`, `404.php`).
- `views/sections` - page sections (`hero`, `services`, `approach`, `about-us`, etc.).
- `views/components` - reusable content blocks (for example `contact-form`, `about-content`).
- `views/partials` - shared UI partials (`site-header`, `section-header`).

## Routing
- Router resolves routes from `views/pages/{route}.php`.
- Empty route resolves to `home`.
- Invalid route resolves to `404` with HTTP 404 status.

## Component Helper
- Helper file: `includes/functions.php`.
- Use `component('sections/hero')`, `component('components/contact-form')`, or `component('partials/site-header')`.
- Legacy alias `component('section-hero')` is also supported.

## Current Page Composition
- `views/pages/home.php` composes:
  - `sections/hero`
  - `sections/services`
  - `sections/approach`
  - `sections/about-us`

## Styling Notes
- Tailwind is loaded via CDN in `layout.php`.
- Keep section spacing consistent with existing rhythm (`py-16`, `py-20`, `py-24` patterns).
- Prefer accessible focus states on links/buttons (`focus-visible` classes).

## Development Notes
- Keep PHP includes path-safe and relative to current file.
- Prefer reusable blocks in `views/components` when content is shared.
- Run syntax checks after changes:
  - `./scripts/check-style.sh`
  - `php -l index.php`
  - `find views -type f -name '*.php' -print0 | xargs -0 -n1 php -l`
