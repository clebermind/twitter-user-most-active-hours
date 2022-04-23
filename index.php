<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('max_execution_time', 360);

if (!defined('PROJECT_DIR')) {
    define('PROJECT_DIR', __DIR__ . DIRECTORY_SEPARATOR);
}

//require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require_once PROJECT_DIR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

\TwitterSummariser\app\AppKernel::instance();
