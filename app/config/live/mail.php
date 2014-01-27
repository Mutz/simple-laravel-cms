<?php

return array(
	'driver' => 'smtp',
	'host' => 'smtp.postmarkapp.com',
	'port' => 2525,
	'from' => array('address' => 'reservas@casadepedra-valedocapao.com.br', 'name' => 'Reservas Casa de Pedra'),
	'encryption' => 'tls',
	'username' => getenv("POSTMARK_API_KEY"),
	'password' => getenv("POSTMARK_API_KEY"),
	'pretend' => false,
);