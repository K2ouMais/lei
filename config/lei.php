<?php

return [

    /*
    |--------------------------------------------------------------------------
    | LEI Prefix
    |--------------------------------------------------------------------------
    |
    | This is the Local Operating Unit (LOU) code.
    |
    */

    'lou_code' => env('LEI_LOU_CODE', '1234'),

    /*
    |--------------------------------------------------------------------------
    | LEI Reserved
    |--------------------------------------------------------------------------
    |
    | This is the reserved value of an LEI.
    |
    */

    'reserved' => env('LEI_RESERVED_VALUE', '00'),
];
