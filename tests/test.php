<?php
require_once __DIR__ . '/../vendor/autoload.php';

use anucode1211\HelloComposer\Hello;

$instance = new Hello();

echo $instance->say("Hello World");