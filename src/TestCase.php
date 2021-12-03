<?php

namespace Streams\Testing;

use Streams\Core\StreamsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public static function applicationBasePath()
    {
        return dirname(__DIR__) . '/laravel';
    }
}
