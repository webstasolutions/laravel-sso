<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel SSO Settings
     |--------------------------------------------------------------------------
     |
     | Set type of this web page. Possible options are: 'server' and 'broker'.
     |
     | You must specify either 'server' or 'broker'.
     |
     */

    'type' => 'server',

    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO server.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO server.
     |
     */

    'usersModel' => \App\User::class,
    'brokersModel' => Zefy\LaravelSSO\Models\Broker::class,

    // Table used in Zefy\LaravelSSO\Models\Broker model
    'brokersTable' => 'brokers',

    // Logged in user fields sent to brokers.
        'userFields' => [
            // Return array field name => database column name
            'id' => 'id',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'email' => 'email',
            'image' => 'image',
            'admin' => 'admin',
            'address' => 'address',
            'bank_account' => 'bank_account',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
            'deleted_at' => 'updated_at',
            'remember_token' => 'remember_token',
            'api_token' => 'api_token',
        ],

    // What is the name of the column that users use to login with (generally 'username' or 'email)
    'usernameField' => 'email',
    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO broker.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO broker.
     |
     */

    'serverUrl' => env('SSO_SERVER_URL', null),
    'brokerName' => env('SSO_BROKER_NAME', null),
    'brokerSecret' => env('SSO_BROKER_SECRET', null),
];
