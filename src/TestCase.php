<?php

namespace Streams\Testing;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public static function applicationBasePath()
    {
        return dirname(__DIR__) . '/laravel';
    }
}
