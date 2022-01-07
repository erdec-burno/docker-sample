<?php
require __DIR__.'/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger('message');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs.log'));
$log->info('test message 3');
//echo config('DB_NAME');
//echo phpinfo();