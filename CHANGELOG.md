## [1.4.0] - 2026-08-08
### Added
- **Interactive Plant Map Expansion:** Integrated 4th process card (`04 / Advanced Surfactant and Polymer Systems`) with full BEM parity and dynamic translation keys.
- **Core Divisions Asset Integration:** Added three enterprise-grade 200 	imes 900$ WebP division photographs (`molecular-sieves-adsorbents.webp`, `water-treatment-chemicals.webp`, `catalyst-process-tech.webp`) with fallback-safe loading paths.
- **i18n Key Architecture:** Registered structured JSON translation trees for `plant_map`, `divisions`, and `specialty_page` across all 9 supported locales.

# CHANGELOG

## v1.3.0-specialty-additives-page

### Added
- Dedicated Specialty Additives technical page: morrischem-industrial-clean/solutions-specialty-additives.php.
- New technical sections covering functional monomers, reactive surfactants, sustainable solvent/coalescent direction, performance additives, and application matrix.

### Changed
- Homepage Card 04 CTA target updated from #contact to /solutions-specialty-additives.php.
- #solutions scoped CTA class styles aligned to cyan/no-underline behavior for visual consistency.

### Verified
- Homepage #solutions desktop rendering (Card 04 visible and styled).
- Homepage #solutions mobile rendering.
- Dedicated specialty page route and rendering.

## v1.2.0-specialty-additives-card (hotfix)

### Fixed
- Specialty Additives card re-sequenced from 05 to 04.
- Specialty Additives CTA href updated to #contact.

### Scope
- Homepage #solutions card block only.

## v1.2.0-specialty-additives-card

### Added
- Card 05: Specialty Additives in homepage #solutions section.
- Dedicated media asset: assets/images/solutions/specialty-additives.webp.

### Changed
- Homepage solutions grid extended with Card 05 after Card 03.

### Milestone
- Card 05 integration completed and frozen under v1.2.0-specialty-additives-card.

## 2026-08-07

### Added
- Industry / Solutions reusable media component.
- Section-scoped responsive layout (3/3/2/1).
- Component documentation.
- Responsive QA.

### Changed
- Homepage #solutions section only.

### Fixed
- Tablet layout optimized to two columns.

### Verified
- Desktop
- Laptop
- Tablet
- Mobile
- No regressions detected.
