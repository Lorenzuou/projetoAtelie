<?php
session_start(); //inicializando a sessão
ob_start(); //limpa o buffer de redirecionamento

//url padrão do site 
define('URL', 'http://35.199.109.172/projetoAtelie/');
define('URLADM', 'http://35.199.109.172/projetoAtelie/adm/');

//controller e métodos padrão
define('CONTROLLER', 'Home');
define('METHOD', 'index');

//dados de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'pacote');
define('DBNAME', 'atelievirtual');
define('ERROR404', 'Error404'); 
define('ERROR4044', 'home'); 
