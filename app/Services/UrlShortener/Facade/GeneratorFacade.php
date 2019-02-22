<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class GeneratorFacade.
 * Facade for short link generator.
 *
 * @package App\Services\UrlShortener\Facade
 */
class GeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return 'generator';
    }
}
