<?php
define('ENV', 'online');

return array(
	'env' => ENV,
	'logger' => array(
		'level' => 'all', // none/off|(LEVEL)
		'dump' => 'file', // none|html|file, 可用'|'组合
		'files' => array( // ALL|(LEVEL)
			#'ALL'	=> dirname(__FILE__) . '/../../logs/' . date('Y-m') . '.log',
		),
	),
	'ssdb' => array(
		'host' => '127.0.0.1',
		'port' => '8888',
		//'password' => '11111111',
	),
	'login' => array(
		'name' => 'test',
		'password' => '12345678', // at least 6 characters
	),
);
