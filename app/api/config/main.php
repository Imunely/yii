<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'
        ]
    ],

    'aliases' => [
        '@api' => dirname(dirname(__DIR__)) . '/api',
    ],

    'components' => [
        'request' => [
            'enableCookieValidation' => false,
            'enableCsrfValidation' => true,
            //'cookieValidationKey' => 'cdjbuyge327327bey287eyxb237eyxb3e',
        ],

        'response' => [

            'format' => 'json',

            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                $response->data = [
                    'success' => $response->isSuccessful,
                    'code' => $response->getStatusCode(),
                    'message' => $response->statusText,
                    'data' => $response->data,
                ];
            },
        ],

        'user' => [
            'identityClass' => 'api\modules\v1\models\db\User',
            'enableAutoLogin' => true,
            'enableSession' => false,
            //'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        //'session' => [ // this is the name of the session cookie used for login on the backend
        //            'name' => 'advanced-backend',
        //        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],



        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pluralize' => false,
                    'class' => \yii\rest\UrlRule::class,
                    'controller' => ['v1/user'],
                    // 'prefix' => 'api',
                    // 'tokens' => [
                    //     '{id}' => '<id:\\w+>'
                    // ]
                    'extraPatterns' => [
                        'POST login' => 'login',
                        'GET go' => 'go',
                        'POST sign' => 'sign',
                        'POST verifyphone' => 'verifyphone'
                    ],
                ],
            ],
        ]
    ],

    'params' => $params,
];
