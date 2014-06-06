<?php

include dirname(__DIR__) . '/vendor/autoload.php';

$fb = new Firebase\Firebase(new GuzzleHttp\Client(), array(
    'token' => $argv[1],
    'base_url' => $argv[2],
    'timeout' => 30
));

$fb->setNormalizer(new Firebase\Normalizer\StringNormalizer());

print_r($fb->get($argv[3]));