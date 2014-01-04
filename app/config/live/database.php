<?php
return array(
	'connections' => array(
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => getenv("OPENSHIFT_MYSQL_DB_HOST"),
			'database'  => getenv("OPENSHIFT_APP_NAME"),
			'username'  => getenv("OPENSHIFT_MYSQL_DB_USERNAME"),
			'password'  => getenv("OPENSHIFT_MYSQL_DB_PASSWORD"), 
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'port'		=> getenv("OPENSHIFT_MYSQL_DB_PORT")
		),
	)
);