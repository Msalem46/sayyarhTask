<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\GoogleOAuth',
                    'clientId' => '313895571665-ahd60u2122fc1hkjla20ocllavnlsqj1.apps.googleusercontent.com',
                    'clientSecret' => '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',
                ],
            ],
        ],
        'googleDrive' => [
            'class' => 'lhs\Yii2FlysystemGoogleDrive',
            'clientId'     => '313895571665-ahd60u2122fc1hkjla20ocllavnlsqj1.apps.googleusercontent.com',
            'clientSecret' => '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',
            'refreshToken' => '1//04PLOrpA9OUuTCgYIARAAGAQSNwF-L9IrnOZml0ijxks8Ht2FkoZTIHkyFN7oO0cy83JXryYcWkFEbg_TcdXr0hUC04YKhhqbGK4',
            // 'rootFolderId' => 'xxx ROOT FOLDER ID xxx'
        ],
    ],
];
