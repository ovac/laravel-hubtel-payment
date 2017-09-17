<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hubtel Account Number
    |--------------------------------------------------------------------------
    |
    | This is the merchant account number. This is required to identify your
    | account and can be found in your Hubtel Merchant Account Dashboard
    | Navigate to  https://unity.hubtel.com/merchantaccount/dashboard
    | and replace 'null' with your account number from the account
    |
    | Example: HM2707170000
     */

    'account_number' => env('HUBTEL_ACCONUT_NUMBER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Hubtel Client (ID/Secret)
    |--------------------------------------------------------------------------
    |
    | Hubtel Payment Requires a valid ClientID and ClientSecret obtained from
    | an active Hubtel Account. The Client ID and Secret can be obtained
    | at https://unity.hubtel.com/account/api-accounts.
     */

    'client' => [

        // Replace the 'null' with the Client ID or define in the .env file
        'id' => env('HUBTEL_CLIENT_ID', 'null'),

        // Replace the 'null' with the Client Secret or define in the .env file
        'secret' => env('HUBTEL_CLIENT_SECRET', 'null'),
    ],
];
