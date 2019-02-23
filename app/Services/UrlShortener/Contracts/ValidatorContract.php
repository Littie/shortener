<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener\Contracts;

/**
 * Class ValidatorContract.
 * @package App\Services\UrlShortener\Contracts
 */
interface ValidatorContract
{
    /**
     * Validate given code.
     *
     * @param string $code
     *
     * @return bool
     */
    public function validate(string $code): bool;
}
