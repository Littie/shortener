<?php

declare(strict_types = 1);

namespace App\Services\UrlShortener;

use App\Services\UrlShortener\Contracts\ValidatorContract;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Validator.
 * Validate generated code.
 *
 * @package App\Services\UrlShortener
 */
class Validator implements ValidatorContract
{
    /**
     * Model name where validator will check code.
     *
     * @var Model
     */
    private $model;

    /**
     * Table field where validator will search code.
     *
     * @var string
     */
    private $field;

    /**
     * Validator constructor.
     */
    public function __construct()
    {
        $this->model = config('generator.model');
        $this->field = config('generator.field');
    }

    /**
     * Validate given code.
     *
     * @param string $code
     *
     * @return bool
     */
    public function validate(string $code): bool
    {
        return $this->isUnique($code);
    }

    /**
     * Check if code is unique in DB.
     *
     * @param string $code
     *
     * @return bool
     */
    private function isUnique(string $code): bool
    {
        return null === $this->model::where($this->field, $code)->first();
    }
}
