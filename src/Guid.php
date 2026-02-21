<?php

declare(strict_types=1);

namespace Sujip\Guid;

class Guid
{
    public readonly GeneratorInterface $generator;

    public function __construct(?GeneratorInterface $generator = null)
    {
        $this->generator = $generator ?? new DefaultGenerator();
    }

    /**
     * Returns a GUID string.
     *
     * @link http://php.net/manual/en/function.com-create-guid.php#119168
     */
    public function create(bool $trim = true): string
    {
        return $this->generator->generate($trim);
    }
}
