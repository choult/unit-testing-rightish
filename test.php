<?php

require_once(__DIR__ . '/vendor/autoload.php');

$formatter = new Choult\Logger\Formatter\Chunked(3, '-');

$logger = new Choult\Logger($formatter);

print $logger->log('test');
