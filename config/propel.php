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
                    'dsn' => 'mysql:host=172.17.0.2;dbname=blogrodolfodb',
                    'user' => 'lara',
                    'password' => 'Nodo1820*',
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
