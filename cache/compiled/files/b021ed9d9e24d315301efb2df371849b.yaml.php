<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/artsectsindustries/sntrpc.github.io/sntrpc.io/user/accounts/son.yaml',
    'modified' => 1680280001,
    'size' => 723,
    'data' => [
        'state' => 'enabled',
        'email' => 'son@sntrpc.com',
        'fullname' => 'Son Vo',
        'title' => 'Son',
        'hashed_password' => '$2y$10$wtYcukg5mK0MaBW9GEvDY.BcY1J4ukrkqOhzObUWweK.Xznf2gf26',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'LIPGRFANE5YRFR3PTBE3WCIWCILPTJMJ',
        'avatar' => [
            'user/accounts/avatars/3qxb9j5l8ugzona.jpg' => [
                'name' => '3qxb9j5l8ugzona.jpg',
                'type' => 'image/jpeg',
                'size' => 34903,
                'path' => 'user/accounts/avatars/3qxb9j5l8ugzona.jpg'
            ]
        ],
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true
            ],
            'toolscollection' => [
                'infopanel' => true
            ]
        ]
    ]
];
