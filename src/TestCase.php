<?php

namespace Streams\Testing;

use Illuminate\Support\Facades\File;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function tearDown(): void
    {
        $this->restoreStreamsData();

        parent::tearDown();
    }

    public static function applicationBasePath()
    {
        return dirname(__DIR__) . '/laravel';
    }

    protected function restoreStreamsData()
    {
        File::deleteDirectory(__DIR__ . '/../laravel/streams');

        File::copyDirectory(
            __DIR__ . '/../laravel/streams.bak',
            __DIR__ . '/../laravel/streams'
        );
    }
}
