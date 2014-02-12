<?php defined('SYSPATH') OR die('No direct access allowed.');
 
return array
(
    'default' => array
    (
        'type'       => 'MySQL',
        'connection' => array(
            'hostname'   => '127.0.0.1',
            'database'   => 'cms_milestone',
            'username'   => 'root',
            'password'   => 'qwerty',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
);