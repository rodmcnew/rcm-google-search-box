<?php

/**
 * ZF2 Plugin Config file
 *
 * This file contains all the configuration for the Module as defined by ZF2.
 * See the docs for ZF2 for more information.
 *
 * PHP version 5.3
 *
 * LICENSE: No License yet
 *
 * @category  Reliv
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2012 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 */

return [

    'rcmPlugin' => [
        'RcmGoogleSearchBox' => [
            'type' => 'Common',
            'display' => 'Google Search Box',
            'tooltip' => 'Google Search Box',
            'icon' => '',
            'editJs' => '/modules/rcm-google-search-box/edit.js',
            'defaultInstanceConfig' => include
                    __DIR__ . '/defaultInstanceConfig.php'
        ],
        'RcmGoogleSearchResults' => [
            'type' => 'Common',
            'display' => 'Google Search Results',
            'tooltip' => 'Google Search Results',
            'icon' => '',
            'defaultInstanceConfig' => include
                __DIR__ . '/resultDefaultInstanceConfig.php',
            'canCache' => false,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'asset_manager' => [
        'resolver_configs' => [
            'aliases' => [
                'modules/rcm-google-search-box/' => __DIR__ . '/../public/',
            ],
            'collections' => [
                'modules/rcm/modules.js' => [
                    'modules/rcm-google-search-box/rcm-google-search-box.js'
                ],
                'modules/rcm/modules.css' => [
                    'modules/rcm-google-search-box/style.css'
                ],
                'modules/rcm-admin/admin.js' => [
                    'modules/rcm-google-search-box/edit.js',
                ],
            ],
        ],
    ],
];
