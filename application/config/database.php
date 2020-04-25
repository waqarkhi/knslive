<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$dbc = [
	'user' 	=> 'tsbeducation_knslive',
	'dbname'=> 'tsbeducation_knslive',
	'pass' 	=> 'um.[+YPydEzo'
];

if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$dbc['user'] = 'root';
	$dbc['pass'] = '';
	$dbc['dbname'] = 'knsonline';
}


$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => $dbc['user'],
	'password' => $dbc['pass'],
	'database' => $dbc['dbname'],
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
