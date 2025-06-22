<?php

$config = array(
    array(
        'field' => 'username',
        'label' => 'User name',
        'rules' => 'required'
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