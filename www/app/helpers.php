<?php

use App\Config;
use App\Database;

if (!function_exists('config')) {
    /**
     * @param string $key
     * @param null $default
     * @return string|null
     */
    function config(string $key, $default = null): ?string
    {
        $config = Config::getInstance();

        return ($res = $config->get($key)) === false ? $default : $res;
    }
}
new Database();