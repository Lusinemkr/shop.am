<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'product' => [
            'class' => 'frontend\modules\product\products',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'common' => [
                    'class' => 'yii\i18n\DbMessageSource',
                ],

            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['en', 'ru','fr'],
            'enableDefaultLanguageUrlCode' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'suffix' => '.html',
            'rules' => [
                'site/<action>/<slug>' => 'site/<action>',
                'about-us' => 'site/about',
                'products' => 'product/products/index',
                'product/<slug>' => 'product/products/product',
                'products/<cat_id:\d+>/<brand_id:\d+>' =>  'product/products/index',
                'brands/<brand_id:\d+>' =>  'product/products/index',
                'category/<cat_id:\d+>' =>  'product/products/index',
                'blog/<action>/<id:\d+>' => 'blog/blog/article',
                'blog/<action>/<id:\d+>/<slug>' => 'blog/blog/article',
                'blog' => 'blog/blog/index',
//                [
//                    'pattern'=>'blog',
//                    'route' => 'blog/blog/index',
//                    'suffix' => '.aspx',
//                ],
                '<action:(login|about|contact)>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
];
