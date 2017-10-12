<?php

require __DIR__.'/vendor/autoload.php';

$guid = new \Sujip\Guid\Guid();

echo $guid->create();
