<?php

return [

    /*
     * Credentials for the user based provider
     */
    'credentials' => [
    	'password_client_id' => env('PASSWORD_CLIENT_ID', ''),
    	'password_client_secret' => env('PASSWORD_CLIENT_SECRET', ''),
        
        'provider' => Olymbytes\Z00s\Credentials\EnvFileProvider::class,
    ],

    /*
     * The field to use as username.
     */
    'username_field' => 'email',
];