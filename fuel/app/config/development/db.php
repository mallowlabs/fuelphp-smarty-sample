<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection' => array(
			'dsn' => 'sqlite:' . APPPATH . 'tmp/sample.sqlite3',
			'persistent' => false,
			'compress' => false,
	),
	'identifier' => '"',
	'table_prefix' => '',
	'enable_cache' => true,
	'profiling' => true,
	'charset' => '',
	),
);
