<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener;

use App\Services\UrlShortener\Contracts\GeneratorContract;
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
        $this->app->bind(GeneratorContract::class, Generator::class);
        $this->app->alias(GeneratorContract::class, 'generator');
    }
}
