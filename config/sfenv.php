<?php

return [
    'urlroot' => env('URLROOT'),
    'cli_id' => env("CLI_ID"),
    'cli_pass' => env("CLI_PASS"),
    're_dir_url' => env("RE_DIR_URL"),
    'fi_logs' => env("FI_LOGS"),
    'scope' => env("SCOPE"),
    'callback_url_carrier' => env("CALLBACK_URL_CARRIER"),
    'webhook_address_orders_create' => env("WEBHOOK_ADDRESS_ORDERS_CREATE"),
    'webhook_address_orders_paid' => env("WEBHOOK_ADDRESS_ORDERS_PAID"),
    'webhook_address_orders_cancelled' => env("WEBHOOK_ADDRESS_ORDERS_CANCELLED"),
    'api_u' => env("API_U"),
    'api_p' => env("API_P"),
    'shop_test' => env("SHOP_TEST"),
];
