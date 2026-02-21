<?php

declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

$guid = new \Sujip\Guid\Guid();

echo $guid->create();
