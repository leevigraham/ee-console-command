#!/usr/bin/env php
<?php

require('vendor/autoload.php');
require(__DIR__.'/vendor/rsanchez/ExpressionEngine-Bootstrap/bootstrap-ee2.php');

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new \LgCommand\Command\ExampleCommand());
$application->run();
