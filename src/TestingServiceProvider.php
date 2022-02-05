<?php

namespace Streams\Testing;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Streams\Core\Support\Facades\Assets;

class TestingServiceProvider extends ServiceProvider
{
    public function register()
    {
        # code...
    }

    public function boot()
    {
        dd(realpath(__DIR__ . '/../resources'));
        Assets::addPath('test-addon', realpath(__DIR__ . '/../resources'));
    }
}
