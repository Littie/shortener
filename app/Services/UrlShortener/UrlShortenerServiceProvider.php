<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener;

use App\Services\UrlShortener\Contracts\GeneratorContract;
use App\Services\UrlShortener\Contracts\ValidatorContract;
use Illuminate\Support\ServiceProvider;

/**
 * Class UrlShortenerServiceProvider.
 * @package App\Services\UrlShortener
 */
class UrlShortenerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /** Bind validator for generator */
        $this->app->bind(ValidatorContract::class, Validator::class);
        $this->app->alias(ValidatorContract::class, 'generator-validator');

        /** Bind generator with validator */
        $this->app->bind(GeneratorContract::class, function ($app) {
            $validator = $app->make('generator-validator');

            return new Generator($validator);
        });
        $this->app->alias(GeneratorContract::class, 'generator');
    }
}
