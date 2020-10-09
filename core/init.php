<?php

session_start();

spl_autoload_register(function ($class) {
    return include_once "../classes/".$class.".php";
});