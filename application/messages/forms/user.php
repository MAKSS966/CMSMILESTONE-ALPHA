<?php
return array(
    'old_password' => array(
        'not_empty' => 'Musisz podać swoje stare hasło',
        'min_length' => 'Stare hasło powinno być dłuższe niż :param2 znaków.',
    ),
    'password' => array(
        'not_empty' => 'Nowe hasło nie może być puste.',
        'min_length' => 'Nowe hasło musi być dłuższe niż :param2 znaków.',
    ),
    'confirm_password' => array(
		'not_empty' => 'Potwierdzenie nowego hasła nie może puste.',
		'min_lenght' => 'Potwierdzenie nowego hasła musi być dłuższe niż :param2 znaków',
		'matches' => 'Nowe hasło nie jest idnetyczne.',
	),
	'user_first_name' => array(
		'not_empty' => 'Imię nie może być puste',
	),
	'user_second_name' => array(
		'not_empty' => 'Nazwisko nie może być puste',
	),
	'email' => array(
		'not_empty' => 'E-mail nie może być pusty',
		'email' => 'Podaj prawidłowy e-mail np. example@domain.com',
	)
);
?>