<?php
return [
    'components' => [
        /**
         * dsn:
         *  - mysql mysql:host=localhost;dbname=feehi
         *  - sqlite sqlite:/feehi.db
         */
        'db' => [
            'class' => '\yii\mongodb\Connection',
            'dsn' => 'mongodb://192.168.0.222:27017/cms',
        ],
        'mailer' => [
            'class' => yii\swiftmailer\Mailer::className(),
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
