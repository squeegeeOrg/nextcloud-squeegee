<?php

if (!defined('PHPUNIT_RUN')) {
    define('PHPUNIT_RUN', 1);
}

require_once __DIR__.'/../../../lib/base.php';

// Fix for "Autoload path not allowed: .../tests/lib/testcase.php"
\OC::$loader->addValidRoot(OC::$SERVERROOT . '/tests');

// Fix for "Autoload path not allowed: .../projects/tests/testcase.php"
\OC_App::loadApp('projects');

if(!class_exists('PHPUnit_Framework_TestCase')) {
    include_once 'PHPUnit/Autoload.php';
}

OC_Hook::clear();
