<?php

namespace Khalin\LaravelSlice;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Khalin\LaravelSlice\Commands\LaravelSliceCommand;

class LaravelSliceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slice')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-slice_table')
            ->hasCommand(LaravelSliceCommand::class);
    }
}
