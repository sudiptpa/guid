# GUID for PHP

A minimal, dependency-free GUID generator for PHP with a tiny runtime footprint.

[![CI](https://github.com/sudiptpa/guid/actions/workflows/ci.yml/badge.svg)](https://github.com/sudiptpa/guid/actions/workflows/ci.yml)
[![Latest Version](https://img.shields.io/packagist/v/sudiptpa/guid)](https://packagist.org/packages/sudiptpa/guid)
[![Downloads](https://img.shields.io/packagist/dt/sudiptpa/guid)](https://packagist.org/packages/sudiptpa/guid)
[![License](https://img.shields.io/packagist/l/sudiptpa/guid)](https://packagist.org/packages/sudiptpa/guid)
[![PHP Version](https://img.shields.io/packagist/php-v/sudiptpa/guid)](https://packagist.org/packages/sudiptpa/guid)

## Requirements

- PHP 8.2+

## Compatibility

- Supported and CI-tested on PHP 8.2, 8.3, 8.4, and 8.5.
- Need legacy PHP support below 8.2? Use `sudiptpa/guid:^2.0`.

## Installation

```bash
composer require sudiptpa/guid
```

## Usage

### Basic usage

```php
<?php

declare(strict_types=1);

use Sujip\Guid\Guid;

$guid = new Guid();

echo $guid->create();
// Example: 2b23924f-0eaa-4133-848e-7ce1edeca8c9
```

### Global helper

```php
<?php

declare(strict_types=1);

echo guid();
// Example: 2b23924f-0eaa-4133-848e-7ce1edeca8c9

echo guid(false);
// Example: {2b23924f-0eaa-4133-848e-7ce1edeca8c9}
```

### Extending generation behavior

Default usage is unchanged. If needed, provide your own generator:

```php
<?php

declare(strict_types=1);

use Sujip\Guid\GeneratorInterface;
use Sujip\Guid\Guid;

final class CustomGenerator implements GeneratorInterface
{
    public function generate(bool $trim = true): string
    {
        return $trim ? 'custom-guid' : '{custom-guid}';
    }
}

$guid = new Guid(new CustomGenerator());

echo $guid->create(); // custom-guid
```

## Public API stability

The package preserves the existing public behavior:

- `Sujip\Guid\Guid::create(bool $trim = true): string`
- `guid(bool $trim = true): string`

No runtime dependencies are required, and default usage stays a single class or helper call.

## Development

```bash
composer install
composer lint
composer stan
composer test
```

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Maintainer notes

See [MAINTAINERS.md](MAINTAINERS.md).

## License

MIT. See [LICENSE](LICENSE).
