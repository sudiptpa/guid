<?php

declare(strict_types=1);

namespace Sujip\Guid\Tests;

use PHPUnit\Framework\TestCase;
use Sujip\Guid\Guid;

final class GuidTest extends TestCase
{
    public function testCreateReturnsTrimmedGuidByDefault(): void
    {
        $guid = (new Guid())->create();

        self::assertSame(36, strlen($guid));
        self::assertMatchesRegularExpression('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/', $guid);
    }

    public function testCreateReturnsWrappedGuidWhenTrimIsFalse(): void
    {
        $guid = (new Guid())->create(false);

        self::assertSame(38, strlen($guid));
        self::assertSame('{', $guid[0]);
        self::assertSame('}', $guid[37]);
        self::assertMatchesRegularExpression('/^\{[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}\}$/', $guid);
    }

    public function testGuidsStayLowercaseAndWellFormedAcrossManyRuns(): void
    {
        $generator = new Guid();

        for ($i = 0; $i < 100; $i++) {
            $guid = $generator->create();

            self::assertSame(strtolower($guid), $guid);
            self::assertSame('-', $guid[8]);
            self::assertSame('-', $guid[13]);
            self::assertSame('-', $guid[18]);
            self::assertSame('-', $guid[23]);
        }
    }

    public function testUniquenessSanityAcrossReasonableBatchSize(): void
    {
        $generator = new Guid();
        $batch = [];

        for ($i = 0; $i < 500; $i++) {
            $batch[] = $generator->create();
        }

        self::assertCount(500, array_unique($batch));
    }
}
