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

    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

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
        do {
            $characters = str_repeat($this->characters, self::SHORT_LINK_LENGTH);
            $code = substr(str_shuffle($characters), 0, self::SHORT_LINK_LENGTH);
        } while (!$this->validator->validate($code));

        return $code;
    }
}
