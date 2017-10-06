<?php

use Sujip\Guid\Guid;

require __DIR__ . '/vendor/autoload.php';

$guid = new Guid;

echo $guid->create() . "\n";

exit();
