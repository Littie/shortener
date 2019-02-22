<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener\Contracts;

/**
 * Interface GeneratorContract.
 * @package App\Services\UrlShortener\Contracts
 */
interface GeneratorContract
{
    /**
     * Generate random hash.
     *
     * @return string
     */
    function generate(): string;
}
