<?php

use Google\Service\Sheets;

return [

    'application_name' => 'Anemia Screening',

    // path ke credentials.json
    'credentials_path' => storage_path('app/google/credentials.json'),

    // scopes WAJIB array of string
    'scopes' => [
        Sheets::SPREADSHEETS,
    ],

];
