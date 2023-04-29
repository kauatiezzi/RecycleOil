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

// Configuração do SSL
$sslOptions = array(
    MYSQLI_CLIENT_SSL_CERT => NULL,
    MYSQLI_CLIENT_SSL_KEY => NULL,
    MYSQLI_CLIENT_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
    MYSQLI_CLIENT_SSL_CIPHER => NULL,
    MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT => true,
);

// Conexão ao banco de dados com SSL
$conexao = mysqli_init();
$conexao->ssl_set(
    $sslOptions['MYSQLI_CLIENT_SSL_CERT'],
    $sslOptions['MYSQLI_CLIENT_SSL_KEY'],
    $sslOptions['MYSQLI_CLIENT_SSL_CA'],
    $sslOptions['MYSQLI_CLIENT_SSL_CIPHER'],
    $sslOptions['MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT']
);
$conexao->real_connect($dbHost, $dbUsername, $dbPassword, $dbName);

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

?>