<?php

declare(strict_types=1);

namespace Sujip\Guid\Tests;

use PHPUnit\Framework\TestCase;
use Sujip\Guid\GeneratorInterface;
use Sujip\Guid\Guid;

final class ExtensionTest extends TestCase
{
    public function testCustomGeneratorIsUsedByGuidClass(): void
    {
        $customGenerator = new class () implements GeneratorInterface {
            public bool $lastTrim = true;

            public function generate(bool $trim = true): string
            {
                $this->lastTrim = $trim;

                return $trim ? 'trimmed-guid' : '{wrapped-guid}';
            }
        };

        $guid = new Guid($customGenerator);

        self::assertSame('trimmed-guid', $guid->create(true));
        self::assertTrue($customGenerator->lastTrim);
        self::assertSame('{wrapped-guid}', $guid->create(false));
        self::assertFalse($customGenerator->lastTrim);
    }
}
