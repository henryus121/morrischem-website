# COMPONENT INDUSTRY / SOLUTIONS

## Purpose of the Component

The Industry / Solutions component presents Morrischem core capabilities on the homepage through three structured cards:

- Molecular Sieves & Adsorbents
- Water Treatment Chemicals
- Catalysts & Process Tech

The component is designed to provide immediate capability scanning, clear technical positioning, and direct navigation to corresponding product pages.

## Files Modified

Implementation scope was limited to:

- morrischem-industrial-clean/index.php
- morrischem-industrial-clean/style-guide.css

Documentation updates completed in this work order:

- PROJECT_STATUS.md
- COMPONENT_INDUSTRY_SOLUTIONS.md

## Files Intentionally Not Modified

The implementation intentionally avoided modifications to:

- Shared/global grid rules and shared responsive breakpoints.
- Any non-solutions homepage sections.
- Product pages and contact page templates.
- Translation files.
- Image assets outside the approved component paths.
- Theme-wide CSS architecture outside section-scoped additions.

## Responsive Behavior

Approved responsive layout for #solutions:

- Desktop (1200 px and above): 3 cards per row.
- Laptop (992 px to 1199 px): 3 cards per row.
- Tablet (768 px to 991 px): 2 cards per row.
- Mobile (767 px and below): 1 card per row.

Layout rules preserve:

- Equal card spacing per breakpoint.
- Equal card height within each row.
- No horizontal overflow.

## Image Specifications

Approved placeholder asset paths:

- includes/industry-cards/industry-adsorption.webp
- includes/industry-cards/industry-water-treatment.webp
- includes/industry-cards/industry-catalysts-process-tech.webp

Image behavior:

- Reusable top media container per card.
- Consistent aspect ratio handling.
- No stretch or distortion.
- Graceful fallback when image files are missing (no broken page layout).

## CSS Architecture

Architecture principles used:

- All component behavior scoped to #solutions.
- Reusable media structure for each card.
- No edits to shared .grid-3 base rule.
- No edits to global breakpoint definitions.

Section-level overrides are additive and isolated to prevent cross-page regressions.

## Accessibility Decisions

- Card media is non-interactive.
- Card reading order remains label, title, description, link.
- Content remains fully readable without dependence on images.
- Link targets remain the primary keyboard/touch actions.

## Performance Decisions

- Lazy loading behavior is used for card images.
- Reusable media containers prevent layout instability.
- Fixed image structure avoids reflow and supports predictable rendering.
- Fallback behavior avoids runtime errors and visual breakage when assets are absent.

## Future Maintenance Rules

Any future modification to this component must:

- remain scoped to #solutions
- preserve the reusable media structure
- preserve responsive behavior
- preserve visual consistency
- avoid modifications to shared grid classes
- require a new work order before implementation
