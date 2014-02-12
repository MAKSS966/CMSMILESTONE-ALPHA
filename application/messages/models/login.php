<?php
return array(
    'username' => array(
        'not_empty' => 'Musisz podać swój login.',
        'min_length' => 'Login musi być dłuższy niż :param2 znaków.',
    ),
    'password' => array(
        'not_empty' => 'Musisz podać swoje hasło.',
        'min_length' => 'Hasło musi być dłuższe niż :param2 znaków.',
    ),
);
?>