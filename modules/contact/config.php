<?php

return [
    '__name' => 'contact',
    '__version' => '0.0.5',
    '__git' => 'git@github.com:getmim/contact.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/contact' => ['install','update','remove'],
        'theme/mailer/contact' => ['install','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-user' => NULL
            ],
            [
                'lib-mailer' => NULL
            ],
            [
                'site-setting' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Contact\\Model' => [
                'type' => 'file',
                'base' => 'modules/contact/model'
            ],
            'Contact\\Library' => [
                'type' => 'file',
                'base' => 'modules/contact/library'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'contact' => [
                'id' => [
                    'type' => 'number'
                ],
                'ip' => [
                    'type' => 'text'
                ],
                'fullname' => [
                    'type' => 'text'
                ],
                'email' => [
                    'type' => 'text'
                ],
                'subject' => [
                    'type' => 'text'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'user'
                ],
                'reply' => [
                    'type' => 'text'
                ],
                'seen' => [
                    'type' => 'date'
                ],
                'replyed' => [
                    'type' => 'date'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ],
    'adminSetting' => [
        'menus' => [
            'site-contact' => [
                'label' => 'Contact',
                'icon' => '<i class="fas fa-file-signature"></i>',
                'info' => 'Change site contact preference',
                'perm' => 'update_site_setting',
                'index' => 0,
                'options' => [
                    'site-contact' => [
                        'label' => 'Change settings',
                        'route' => ['adminSiteSettingSingle',['group' => 'Contact']]
                    ]
                ]
            ]
        ]
    ]
];
