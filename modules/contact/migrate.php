<?php

return [
    'Contact\\Model\\Contact' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],

            // visitor area
            'fullname' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => false 
                ],
                'index' => 2000
            ],
            'email' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => false 
                ],
                'index' => 3000
            ],
            'subject' => [
                'type' => 'VARCHAR',
                'length' => 200,
                'attrs' => [
                    'null' => false 
                ],
                'index' => 4000
            ],
            'content' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 5000
            ],

            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true
                ],
                'index' => 6000
            ],
            'reply' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 7000
            ],

            'seen' => [
                'type' => 'DATETIME',
                'attrs' => [
                    'null' => true
                ],
                'index' => 8000
            ],
            'replyed' => [
                'type' => 'DATETIME',
                'attrs' => [
                    'null' => true
                ],
                'index' => 9000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ],
    'SiteSetting\\Model\\SiteSetting' => [
        'data' => [
            'name' => [
                [
                    'name' => 'contact_admin_email',
                    'type' => 7,
                    'group' => 'Contact',
                    'value' => 'admin@localhost'
                ]
            ]
        ]
    ]
];