<?php

return [
    'modules' => [

        // List of directories where Lightna modules can be localed
        'pool' => ['vendor', 'module'],

        // List of enabled modules
        // Relative to the Lightna entry path to the module (not the name)
        'enabled' => [
            'lightna/webpack',
            'lightna/tailwind',
            'lightna/phpunit',
            'lightna/session',
            'lightna/magento-backend',
            'lightna/magento-frontend',
            'lightna/magento-frontend-lane',
        ],
    ],

    // Relative path to the directory where Lightna will make its build
    'compiler_dir' => 'generated/compiled',

    // Relative path to the directory where Lightna will move built assets (CSS, JS, fonts, images, etc)
    'asset_dir' => '../pub/lightna',

    // Relative path to the document root, required to build the correct URLs to the assets
    'doc_dir' => '../pub',

    // Relative path to Magento directory, required for indexer to collect data from Magento modules
    'project_dir' => '..',

    // Use fpc_compatible = false unless:
    // 1) Lightna page is cached by FPC (Varnish, Fastly, Builtin) and it renders private blocks
    // 2) Lightna Lane page is cached by FPC, and it renders private blocks
    'fpc_compatible' => false,

    // Use false unless you want to enable progressive rendering intentionally, read more in the documentation
    'progressive_rendering' => false,

    'maintenance' => [

        // The directory where custom default.phtml maintenance page can be placed
        'dir' => 'maintenance',

        // The $_SERVER variable name which is used to define custom maintenance page per website, for example [vary_value].phtml
        'vary_name' => 'MAGE_RUN_CODE',
    ],
    'router' => [
        'bypass' => [

            // Relative path to Magento index.php file
            'file' => '../pub/magento_index.php',
            'rule' => [

                // If URL is unknown to Lightna and has no matching bypass rule, it could render 404 page or bypass request to Magento
                // Values: 404 | 'bypass'
                'no_route' => '****',
            ],
        ],
    ],
    'storage' => [
        'opcache' => [
            'options' => [

                // Relative path to indexer opcache files
                'dir' => 'generated/storage',
            ],
        ],
    ],
];
