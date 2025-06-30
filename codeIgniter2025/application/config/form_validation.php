<?php

$config = array(
    array(
        'field' => 'username',
        'label' => 'User name',
        'rules' => 'required|min_length[5]',
        'errors' => array(
            'required' => 'value khali nha ho',
            'min_length' => '%s kom thake kon',
        ),
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required'
    ),
);
$config['error_prefix'] = '<div class="text-danger mt-1 mb-1">';
$config['error_suffix'] = '</div>';
?>