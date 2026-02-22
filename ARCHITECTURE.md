# Architecture

## Overview

`Sudiptpa\Guid` is a small, dependency-free GUID/UUID generation utility.
It provides static access, instance-based generation, interface-driven extensibility, and global helper functions.

## Project Map

```text
src/
  Guid.php                 Main facade/static API
  GeneratorInterface.php   Contract for GUID generators
  DefaultGenerator.php     Built-in random GUID implementation
  helpers.php              Optional global helper(s)
tests/
  GuidTest.php
  HelperTest.php
  ExtensionTest.php
  bootstrap.php
```

## Core Design

- `Guid` is the public entrypoint used by consumers.
- `GeneratorInterface` defines the generation contract.
- `DefaultGenerator` is the internal default implementation.
- Consumers can inject/override generator behavior via the interface.
- `helpers.php` enables function-style usage for apps that prefer helpers.

## Generation Flow

1. Caller uses `Guid` API (or helper).
2. `Guid` delegates to configured generator.
3. Generator returns a normalized GUID string.
4. Caller receives the generated identifier.

## Extension Points

- Implement `GeneratorInterface` to support custom strategies (for example deterministic/testing generators).
- Bind custom generator into `Guid` where project-level behavior needs to differ.

## Testing Strategy

- `GuidTest` validates default generation behavior.
- `HelperTest` validates helper wrappers.
- `ExtensionTest` validates custom generator integration.

## Contributor Notes

- Keep API minimal and dependency-free.
- Preserve backward compatibility for helper and facade usage.
- Add test coverage for every generator behavior change.
