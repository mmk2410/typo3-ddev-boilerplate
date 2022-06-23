<?php


$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 DDEV-Local Boilerplate',
    'description' => 'Boilerplate TYPO3-Extension for working with DDEV Local.',
    'category' => 'example',
    'author' => 'Marcel Kapfer'
    'author_company' => '',
    'author_email' => 'opensource@mmk2410.org',
    'state' => 'test',
    'clearCacheOnLoad' => true,
    'version' => '11.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'MMK2410\\TYPO3DDEVLocalBoilerplate\\' => 'Classes'
        ]
    ],
];
