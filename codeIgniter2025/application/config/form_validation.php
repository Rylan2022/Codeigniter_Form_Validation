<?php

$config = [
    'signup' => [
        [
            'field' => 'username',
            'lable' => 'Username',
            'rules' => 'required|min_length[5]|max_length[12]|is_unique[users.username]',
            [
                'required' => 'You have not provided %s.',
                'is_unique' => 'This %s already exists.'
            ]
        ],
        [
            'field' => 'email',
            'lable' => 'Email',
            'rules' => 'required|valid_email|is_unique[users.email]'
        ],
        [
            'field' => 'password',
            'lable' => 'Password',
            'rules' => 'required'
        ],
        [
            'field' => 'passconf',
            'lable' => 'Confirm Password',
            'rules' => 'required|matches[password]'
        ],
    ]

];


$config['error_prefix'] = '<div class="text-danger mt-1 mb-1">';
$config['error_suffix'] = '</div>';
?>