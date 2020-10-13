<?php
// framework/core/Framework.class.php

class Framework {

    // \Framework::run :: void -> void
    public static function run() {
        self::init();

        self::autoload();

        self::dispatch();
    }

    private static function init() {

    }

    private static function autoload() {

    }

    private static function dispatch() {

    }
}