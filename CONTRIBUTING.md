# Contributing

## Development setup

```bash
composer install
```

## Local quality gates

Run all checks before opening a PR:

```bash
composer lint
composer stan
composer test
```

To auto-fix coding style:

```bash
composer lint:fix
```

## Standards

- Keep runtime dependency count at zero.
- Preserve public API behavior unless explicitly planned for a major release.
- Keep the package standalone; avoid integration-layer adapters.
- Keep changes minimal, readable, and fast.
- Follow PSR-12 formatting.
- Add tests for every user-visible behavior change.

## Pull requests

- Keep PRs focused and small.
- Update docs/changelog when behavior or tooling changes.
- Include rationale for compatibility-impacting decisions.
