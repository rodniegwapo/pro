<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('constants.your_key') to get the values.
    |
    */

    'ERROR_CODE' => [
        '2' =>'Invalid Request Parameters Please Try Again.',
        '3' =>'Email Or Password is Incorrect.',
    ],
    'EMAIL_VERIFICATION_TOKEN_EXPIRED_MINUTES'=>120,
    'EMAIL_INFO' => [
        'EMAIL_VARIFATION' => [
            'SUBJECT' => env('APP_TITLE')." - Confirmation email",
            'FROM_EMAIL' => "renish@rbian.in",
            'FROM_NAME' => "Renish Gotecha",
        ],
        'FORGET_PASSWORD_EMAIL_VARIFATION' => [
            'SUBJECT' => env('APP_TITLE')." - Confirmation email for forget password",
            'FROM_EMAIL' => "renish@rbian.in",
            'FROM_NAME' => "Renish Gotecha",
        ]
    ],
    'STATUS' => [
        'DEFAULT' => 0,
        'ACTIVE' => 1,
        'IN_ACTIVE' => -1
    ]

];