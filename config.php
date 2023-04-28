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

$dbHost = 'aws.connect.psdb.cloud ';
$dbUsername = 'xgsr2zh92tn882fcbpp7';
$dbPassword = 'pscale_pw_9sjA5oIGkgJPUVuxpaMVgaN57HrSWpY1jphLWzMhnLC ';
$dbName = 'formulario_uniaraoil';

// Configuração do SSL
$sslOptions = array(
    MYSQLI_CLIENT_SSL_CA => '/etc/ssl/certs/ca-certificates.crt'
);

// Conexão ao banco de dados com SSL
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3306, NULL, MYSQLI_CLIENT_SSL, $sslOptions);

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