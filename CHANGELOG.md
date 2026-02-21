# Changelog

## 3.0.0 - 2026-02-21

### Changed
- Modernized package for PHP 8.2+ with strict types and typed APIs.
- Added explicit extension point via `Sujip\Guid\GeneratorInterface`.
- Added `Sujip\Guid\DefaultGenerator` while preserving default behavior.
- Added full test suite, PHPStan, PHP CS Fixer, and GitHub Actions CI.
- Updated documentation, contributing guide, and maintainer notes.
- Added CI coverage for PHP 8.4 and 8.5.
- Documented tested compatibility through PHP 8.5.
- Consolidated the package as a standalone PHP library.
- Removed integration layers and related metadata.

### Added
- `Sujip\Guid\GeneratorInterface`
- `Sujip\Guid\DefaultGenerator`

### Removed
- Framework integration classes and related compatibility tests/stubs.

### Compatibility
- Public standalone API remains stable:
  - `Sujip\Guid\Guid::create(bool $trim = true): string`
  - `guid(bool $trim = true): string`
- For legacy PHP versions below 8.2, stay on `sudiptpa/guid:^2.0`.
- Breaking change: integration-layer classes are no longer shipped.

## 1.0.4 - 2017-10-06
- Fixed up a issue with `Guid::create()` due to wrong class binding.

## 1.0.3 - 2017-10-06
- Fixed issue with package auto-discovery.

## 1.0.2 - 2017-10-06
- Removed an external dependency.

## 1.0.1 - 2017-10-06
- Code refactoring.

## 1.0.0 - 2017-10-06
- Initial release.
