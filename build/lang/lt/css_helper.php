<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Helper to identify compliance - EN
    |--------------------------------------------------------------------------
    */

    'contest'   => [
        'status_class' => [
            'live' => '',
            'completed' => 'success',
            'pending' => 'warning',
        ],
        'status_class_led' => [
            'live' => 'active',
            'completed' => 'active',
            'pending' => 'waiting',
        ],
    ],
    'offer'   => [
        'status_class' => [
            'new' => '',
            'waiting_carrier' => 'warning',
            'waiting_customer' => 'warning',
            'accepted' => 'success',
        ],
        'status_class_led' => [
            'new' => 'active',
            'waiting_carrier' => 'waiting',
            'waiting_customer' => 'waiting',
            'accepted' => 'active',
        ],
    ],
];
