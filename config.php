<?php

      //  $dbHost = 'Localhost';
      //  $dbUsername = 'root';
      //  $dbPassword = '';
      //  $dbName = 'formulario_uniaraoil';

      //  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

      //  if($conexao->connect_errno)
      //  {
      //   echo "Erro";
      //  }
      //  else 
      //  {
      //   echo "Conectado";
      //  }

$dbHost = $_ENV['HOST'];
$dbUsername = $_ENV['USERNAME'];
$dbPassword = $_ENV['PASSWORD'];
$dbName = $_ENV['DATABASE'];

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, '/etc/ssl/certs/ca-certificates.crt', NULL, NULL);
$conexao = $mysqli->real_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conexao) {
  die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


?>
