<!-- 

      //  $dbHost = 'aws.connect.psdb.cloud';
      //  $dbUsername = 'xgsr2zh92tn882fcbpp7';
      //  $dbPassword = 'xgsr2zh92tn882fcbpp7';
      //  $dbName = 'formulario_uniaraoil';
      //  $dbssl = '/etc/ssl/cert.pem';

      //  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName,$dbssl);

      //  if($conexao->connect_errno)
      //  {
      //   echo "Erro";
      //  }
      //  else 
      //  {
      //   echo "Conectado";
      //  }
 -->

<?php
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
  $mysqli->close();
?>