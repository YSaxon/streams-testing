<?php

namespace Streams\Testing\Tests;

use Streams\Core\Stream\Stream;
use Streams\Core\Support\Facades\Streams;

class ExampleTest extends \Streams\Testing\TestCase
{
    public function test_loads_testing_streams()
    {
        $this->assertInstanceOf(Stream::class, Streams::make('films'));
    }
}
