<?php
//Conexão com bancos de dados
//Ao momento de criar o agrupamento do banco de dados tem q escolher utf8_unicode_ci
$servename = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servename, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");


if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;	