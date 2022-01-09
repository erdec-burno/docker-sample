<?php
require __DIR__.'/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Database\Capsule\Manager as Capsule;


$log = new Logger('message');
$log->pushHandler(new StreamHandler('/app/logs/logs.log'));
$log->info('test message final! 2 :)');
echo "data from DB: " .config('DB_NAME');
$cities = Capsule::table('cities')->limit(3)->get();
echo "<pre>" . $cities . "</pre>";
//echo phpinfo();
