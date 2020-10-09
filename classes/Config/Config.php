<?php

namespace Config;

class Config
{
    public static function load()
    {
       $_SESSION['config'] = parse_ini_file('../config/config.ini');
    }

    public static function get($name)
    {
        return $_SESSION['config'][$name] ?? false;
    }
}