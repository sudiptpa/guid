# Maintainer Notes

## Design principles

- Keep this package small, readable, and dependency-free at runtime.
- Keep this package standalone.
- Preserve the long-standing public API and default behavior.
- Prioritize predictable output and low overhead.

## Extension policy

- `Sujip\Guid\GeneratorInterface` is the supported extension point.
- `Sujip\Guid\Guid` remains the primary user entrypoint.
- Avoid adding multiple abstraction layers or container requirements.

## Compatibility guardrails

- Backward compatibility is required for `Guid::create()` and `guid()` in major line `3.x`.
- Integration layers are out of scope for this package.
- Any intentional break must be documented in `CHANGELOG.md` and released under SemVer rules.

## Release notes guidance

- Validate with `composer validate --strict`.
- Ensure `composer lint`, `composer stan`, and `composer test` all pass.
- Prefer concise release notes that distinguish platform breaks from behavioral compatibility.
