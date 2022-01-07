<?php
//declare(strict_types=1);

namespace App;

use Dotenv\Dotenv;

class Config
{
    private static $instance = null;

    /**
     * @return Config
     */
    public static function getInstance(): Config
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * @param string $key
     * @return string|bool
     */
    public function get(string $key)
    {
        return getenv($key);
    }

    private function __construct()
    {
        if (file_exists(__DIR__ . '/../.env')) {
            $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/..');
            $dotenv->load();
        }
    }

}