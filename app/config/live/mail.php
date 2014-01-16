<?php

return array(
	'driver' => 'smtp',
	'host' => 'smtp.postmarkapp.com',
	'port' => 2525,
	'from' => array('address' => 'elena@nosnaweb.net', 'name' => 'Elena Kolevska Test'),
	'encryption' => 'tls',
	'username' => getenv("POSTMARK_API_KEY"),
	'password' => getenv("POSTMARK_API_KEY"),
	'pretend' => false,
);