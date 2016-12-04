<?php
return [
    // Additional modules to include when in development mode
    'modules' => [
        'Zend\ServiceManager\Di',
        'Zend\Session',
        'Zend\Mvc\Plugin\Prg',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Mvc\Plugin\FilePrg',
        'Zend\Mvc\I18n',
        'Zend\Mvc\Console',
        'Zend\Log',
        'Zend\Form',
        'Zend\Db',
        'Zend\Cache',
        'ZendDeveloperTools'
    ],
    // Configuration overrides during development mode
    'module_listener_options' => [
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{,*.}{global,local}-development.php'
        ],
        'config_cache_enabled' => false,
        'module_map_cache_enabled' => false
    ]
];
