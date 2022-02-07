<?php

namespace Streams\Testing;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function register()
    {
        # code...
    }

    public function boot()
    {
        View::addNamespace('streams-testing', __DIR__ . '/../resources/views');
    }
}
