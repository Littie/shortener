<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener;

use App\Services\UrlShortener\Contracts\GeneratorContract;

/**
 * Class Hasher.
 * @package App\Services\UrlShortener
 */
class Generator implements GeneratorContract
{
    /**
     * Length of short link.
     *
     * @var int
     */
    const SHORT_LINK_LENGTH = 6;

    /**
     * Set of characters for generation short link.
     *
     * @var string
     */
    private $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    /**
     * Generate random hash.
     *
     * @return string
     */
    public function generate(): string
    {
        $characters = str_repeat($this->characters, self::SHORT_LINK_LENGTH);

        return substr(str_shuffle($characters), 0, self::SHORT_LINK_LENGTH);
    }
}
