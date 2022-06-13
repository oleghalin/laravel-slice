<?php


use Illuminate\Support\Facades\Route;
use Khalin\LaravelSlice\Http\Controllers\HomeController;

Route::prefix(config('slice.router.prefix'))->group(function () {
    Route::get('/{view?}', HomeController::class)->where('view', '(.*)')->name('slice.index');
});
