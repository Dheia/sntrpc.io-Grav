<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/artsectsindustries/sntrpc.github.io/sntrpc.io/user/themes/simplicity/blueprints.yaml',
    'modified' => 1680280002,
    'size' => 2864,
    'data' => [
        'name' => 'Simplicity',
        'version' => '1.0.3',
        'description' => 'This theme for the Grav CMS is a simple and clear modular design. This is primarily used to create a portfolio of yours. You can also use this to introduce your projects to the public or to run a blog.',
        'icon' => 'id-card-o',
        'keywords' => 'portfolio, modular, simple, project, responsive, theme, modern',
        'author' => [
            'name' => 'Tom Hirter',
            'email' => 'github@hirter.dev',
            'url' => 'https://hirter.dev'
        ],
        'homepage' => 'https://github.com/Memurame/grav-theme-simplicity',
        'bugs' => 'https://github.com/Memurame/grav-theme-simplicity/issues',
        'license' => 'MIT',
        'demo' => 'https://demo.hirter.dev/simplicity',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ],
            1 => [
                'name' => 'tools-collection',
                'version' => '>=0.1.0'
            ],
            2 => [
                'name' => 'auto-date',
                'version' => '>=1.0.2'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'inhalt' => [
                            'type' => 'tab',
                            'title' => 'Inhalt',
                            'fields' => [
                                'pers' => [
                                    'type' => 'section',
                                    'title' => 'THEME_SIMPLICITY.ADMIN.SECTION.PERSON',
                                    'underline' => true,
                                    'fields' => [
                                        'header.name' => [
                                            'type' => 'text',
                                            'label' => 'THEME_SIMPLICITY.ADMIN.FIELDS.NAME.LABEL',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        'header.subtitle' => [
                                            'type' => 'text',
                                            'label' => 'THEME_SIMPLICITY.ADMIN.FIELDS.SUBTITLE.LABEL',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        'header.image' => [
                                            'type' => 'file',
                                            'label' => 'THEME_SIMPLICITY.ADMIN.FIELDS.PROFILE_IMAGE.LABEL',
                                            'destination' => 'user/themes/simplicity/images/custom'
                                        ]
                                    ]
                                ],
                                'social' => [
                                    'type' => 'section',
                                    'title' => 'THEME_SIMPLICITY.ADMIN.SECTION.SOCIAL',
                                    'underline' => true,
                                    'fields' => [
                                        'header.social.facebook' => [
                                            'type' => 'text',
                                            'label' => 'Facebook',
                                            'toggleable' => true,
                                            'placeholder' => 'https://facebook.com/hans.mueller'
                                        ],
                                        'header.social.twitter' => [
                                            'type' => 'text',
                                            'label' => 'Twitter',
                                            'toggleable' => true,
                                            'placeholder' => 'https://facebook.com/hans.mueller'
                                        ],
                                        'header.social.linkedin' => [
                                            'type' => 'text',
                                            'label' => 'Linkedin',
                                            'toggleable' => true,
                                            'placeholder' => 'https://facebook.com/hans.mueller'
                                        ],
                                        'header.social.github' => [
                                            'type' => 'text',
                                            'label' => 'Github',
                                            'toggleable' => true,
                                            'placeholder' => 'https://facebook.com/hans.mueller'
                                        ],
                                        'header.social.google' => [
                                            'type' => 'text',
                                            'label' => 'Google+',
                                            'toggleable' => true,
                                            'placeholder' => 'https://facebook.com/hans.mueller'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
