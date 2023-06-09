<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/artsectsindustries/local.sntrpc/user/plugins/tools-collection/blueprints.yaml',
    'modified' => 1680280002,
    'size' => 6551,
    'data' => [
        'name' => 'Tools Collection',
        'version' => '0.1.4',
        'description' => 'A collection of tools that make working with Grav easier',
        'keywords' => 'collection, tools, tools-collection, resize, image, blueprints, blueprint',
        'icon' => 'info',
        'author' => [
            'name' => 'Thomas Anderson',
            'email' => 'mr.anderson@onixmail.ch'
        ],
        'license' => 'MIT',
        'homepage' => 'https://github.com/Memurame/grav-plugin-tools-collection',
        'bugs' => 'https://github.com/Memurame/grav-plugin-tools-collection',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'allgemein' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.TITLE',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.STATUS',
                                    'default' => 1,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'markdown' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.SECTION_TWIG_SETTINGS',
                                    'underline' => true,
                                    'fields' => [
                                        'markdown.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.EXTENDED_MARKDOWN',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'Enabled',
                                                0 => 'Disabled'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'filter.twigextension.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.TWIG_EXTENSION',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Enabled',
                                                0 => 'Disabled'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'filter.twigextension.modules' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.ENABLED_EXTETSION',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ]
                                    ]
                                ],
                                'blueprint' => [
                                    'type' => 'section',
                                    'title' => 'Blueprints',
                                    'underline' => true,
                                    'fields' => [
                                        'pageblueprint.options.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.OPTIONS',
                                            'default' => 1,
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'Enabled',
                                                0 => 'Disabled'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'pageblueprint.advanced.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.GENERAL.EXTENDED',
                                            'default' => 1,
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'Enabled',
                                                0 => 'Disabled'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'imageresize' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.TITLE',
                            'fields' => [
                                'imageresize.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.STATUS',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'imagesetting' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.SECTION_IMAGEEDIT',
                                    'underline' => true,
                                    'fields' => [
                                        'imageresize.adapter' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.MODUL',
                                            'default' => 'imagick',
                                            'size' => 'medium',
                                            'options' => [
                                                'imagick' => 'Imagick',
                                                'gd' => 'GD'
                                            ]
                                        ],
                                        'imageresize.remove_original' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.REMOVE_ORIGINAL',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Enabled',
                                                0 => 'Disabled'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'imageresize.sizes' => [
                                            'type' => 'list',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.IMAGE_SIZES',
                                            'collapsed' => true,
                                            'fields' => [
                                                '.width' => [
                                                    'type' => 'number',
                                                    'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.WIDTH',
                                                    'placeholder' => 1280,
                                                    'min' => 1
                                                ],
                                                '.quality' => [
                                                    'type' => 'number',
                                                    'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.QUALITY',
                                                    'placeholder' => 82,
                                                    'min' => 0,
                                                    'max' => 100,
                                                    'default' => 82
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'usein' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.SECTION_ENABLED',
                                    'underline' => true,
                                    'fields' => [
                                        'imageresize.mode' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.TYPE',
                                            'size' => 'medium',
                                            'default' => 'alle',
                                            'options' => [
                                                'all' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.OPTION_1',
                                                'ignorelist' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.OPTION_2',
                                                'allowlist' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.OPTION_3'
                                            ]
                                        ],
                                        'imageresize.auswahl' => [
                                            'type' => 'selectize',
                                            'label' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.USE_IN',
                                            'help' => 'PLUGIN_TOOLS_COLLECTION.RESIZE.USE_IN_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'infopanel' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_TOOLS_COLLECTION.INFOPANEL.TITLE',
                            'fields' => [
                                'infopanel.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.INFOPANEL.STATUS',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'infopanel.navtitel' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.INFOPANEL.NAV_TITLE'
                                ],
                                'infopanel.sitetitel' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.INFOPANEL.SITE_TITLE'
                                ],
                                'infopanel.titel' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.INFOPANEL.HEADING'
                                ],
                                'infopanel.text' => [
                                    'type' => 'textarea',
                                    'label' => 'PLUGIN_TOOLS_COLLECTION.INFOPANEL.TEXT'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
