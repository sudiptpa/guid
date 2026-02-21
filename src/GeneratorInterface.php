<?php

declare(strict_types=1);

namespace Sujip\Guid;

interface GeneratorInterface
{
    public function generate(bool $trim = true): string;
}
