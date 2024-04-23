<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\QueryBuilder\QueryBuilderRequest;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        QueryBuilderRequest::setFieldsArrayValueDelimiter(',');   // Fields
        QueryBuilderRequest::setSortsArrayValueDelimiter('|');    // Sorts
    }
}
