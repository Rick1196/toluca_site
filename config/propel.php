<?php
/**
 * Created by PhpStorm.
 * User: carlosivanhuertachavez
 * Date: 16/04/18
 * Time: 17:38
 */?>
<?php
return [
    'propel' => [
        'database' => [
            'connections' => [
                'blogrodolfodb' => [
                    'adapter' => 'mysql',
                    'dsn' => 'mysql:host=127.0.0.1;dbname=blogrodolfodb',
                    'user' => 'root',
                    'password' => 'root',
                    'settings' => [
                        'charset' => 'utf8'
                    ]
                ]
            ]
        ],
        'runtime' => [
            'defaultConnection' => 'blogrodolfodb',
            'connections' => ['blogrodolfodb']
        ],
        'generator' => [
            'defaultConnection' => 'blogrodolfodb',
            'connections' => ['blogrodolfodb']
        ]
    ]
];
?>
