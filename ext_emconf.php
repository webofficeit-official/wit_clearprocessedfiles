<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[WOIT] Clear processed files',
    'description' => 'Clear processed files.',
    'category' => 'services',
    'author' => 'Team WebofficeIT, Rahul R S',
    'author_email' => 'info@webofficeit.com',
    'author_company' => 'Weboffice Infotech India Pvt. Ltd.',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
