<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[WOIT] Clear Processed Files',
    'description' => 'Simplify file maintenance in TYPO3 with our extension, designed to quickly and effectively clear processed files from your fileadmin directory.',
    'category' => 'plugin',
    'author' => 'Team WebofficeIT, Rahul R S',
    'author_email' => 'info@webofficeit.com',
    'author_company' => 'Weboffice Infotech India Pvt. Ltd.',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
