<?php
namespace Configs;

define('DNS_DATABASE', 'pgsql');
define('HOST_CONNECTION', 'localhost');
define('DATABASE', 'agilesk');
define('USER_CONNECTION', 'root');
define('PASSWORD_CONNECTION',  'root');
define('STRING_CONNECTION_DB_PG', DNS_DATABASE.':host='.HOST_CONNECTION.';dbname'.DATABASE);

?>