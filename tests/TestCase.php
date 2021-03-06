<?php

namespace Khalin\LaravelSlice\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Khalin\LaravelSlice\SliceServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Khalin\\LaravelSlice\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SliceServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-slice_table.php.stub';
        $migration->up();
        */
    }
}
