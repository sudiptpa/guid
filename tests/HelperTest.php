<?php

declare(strict_types=1);

namespace Sujip\Guid\Tests;

use PHPUnit\Framework\TestCase;

final class HelperTest extends TestCase
{
    public function testGuidHelperReturnsTrimmedGuidByDefault(): void
    {
        $guid = guid();

        self::assertSame(36, strlen($guid));
        self::assertMatchesRegularExpression('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/', $guid);
    }

    public function testGuidHelperReturnsWrappedGuidWhenTrimIsFalse(): void
    {
        $guid = guid(false);

        self::assertSame(38, strlen($guid));
        self::assertMatchesRegularExpression('/^\{[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}\}$/', $guid);
    }
}
