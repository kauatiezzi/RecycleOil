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

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_uniaraoil';

// Configuração do SSL
$sslOptions = array(
    MYSQLI_CLIENT_SSL_KEY => "/etc/ssl/certs/ca-certificates.crt",
    MYSQLI_CLIENT_SSL_CERT => "/etc/ssl/certs/ca-certificates.crt",
    MYSQLI_CLIENT_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
    MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT => true
);

// Conexão ao banco de dados com SSL
$conexao = mysqli_init();
mysqli_ssl_set($conexao, "/etc/ssl/certs/ca-certificates.crt", "/etc/ssl/certs/ca-certificates.crt", "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
mysqli_real_connect($conexao, $dbHost, $dbUsername, $dbPassword, $dbName, 3306, NULL, MYSQLI_CLIENT_SSL, $sslOptions);

// Verificação de erros
if (mysqli_connect_errno()) {
    echo "Erro ao conectar ao banco de dados MySQL: " . mysqli_connect_error();
    exit();
}

// Execução de consultas e outras operações no banco de dados
// ...

// Fechamento da conexão com o banco de dados
mysqli_close($conexao);

?>