## A Simple GUID creator package for PHP.

This package is useful for creating unique GUID. It's under [MIT](https://github.com/sudiptpa/laravel-guid/blob/master/LICENSE) license so it's free for everyone.

### Installation

You can install the package via composer: [Composer](http://getcomposer.org/).

```php
composer require sudiptpa/guid
```

### Usage

#### Laravel
If using Laravel 5, include the service provider within your `config/app.php` file.

```php
'providers' => [
    Sujip\Guid\GuidServiceProvider::class,
]

'aliases' => [
   'Guid' => 'Sujip\Guid\Guid'
]
```
If you are a Laravel v5.5 user, this package has been configured for discovery, Laravel will automatically register its service providers and facades when it is installed, creating a convenient installation experience for you.

#### Create GUID

```php
echo "GUID: " . Guid::create(); //example output : 2b23924f-0eaa-4133-848e-7ce1edeca8c9

echo "GUID: " . guid(); // example output: 2b23924f-0eaa-4133-848e-7ce1edeca8c9

```

#### Outside Laravel

```php
use Sujip\Guid\Guid;

require __DIR__ . '/vendor/autoload.php';

$guid = new Guid;

$guid = $guid->create();

````

### Output

```php
//Example: 2b23924f-0eaa-4133-848e-7ce1edeca8c9

```

### Changelog

Please see [CHANGELOG](https://github.com/sudiptpa/laravel-guid/blob/master/CHANGELOG.md) for more information what has changed recently.

### Contributing

Contributions are **welcome** and will be fully **credited**.

Contributions can be made via a Pull Request on [Github](https://github.com/sudiptpa/laravel-guid).

### Support

If you are having general issues with the package, feel free to drop me and email [sudiptpa@gmail.com](mailto:sudiptpa@gmail.com)

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/sudiptpa/laravel-guid/issues),
or better yet, fork the library and submit a pull request.
