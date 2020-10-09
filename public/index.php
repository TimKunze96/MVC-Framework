<?php

require_once '../core/init.php';

use Config\Config;

Config::load();
echo Config::get('app_name');

