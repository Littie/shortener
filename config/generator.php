<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Short link validator table.
    |--------------------------------------------------------------------------
    |
    | This option sets the links table name for validator.
    |
    */

    'model' => \App\Models\Link::class,

    /*
    |--------------------------------------------------------------------------
    | Short link validator field.
    |--------------------------------------------------------------------------
    |
    | This option sets the field name in links table for validator
    | that will be checked for unique value.
    |
    */

    'field' => 'code',
];
