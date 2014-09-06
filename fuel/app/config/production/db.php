<?php
/**
 * The production database settings. These get merged with the global settings.
 */

$cleardb = parse_url(getenv('CLEARDB_DATABASE_URL'));

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => sprintf("mysql:host=%s;dbname=%s", $cleardb['host'], substr($cleardb['path'], 1)),
			'username'   => $cleardb['user'],
			'password'   => $cleardb['pass'],
		),
	),
);
