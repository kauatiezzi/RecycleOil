<?php

      //  $dbHost = 'Localhost';
      //  $dbUsername = 'root';
      //  $dbPassword = '';
      //  $dbName = 'formulario_uniaraoil';

      //  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
      $conexao = mysqli_init();
      $conexao->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
      $conexao->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
      $conexao->close();
      
      //  if($conexao->connect_errno)
      //  {
      //   echo "Erro";
      //  }
      //  else 
      //  {
      //   echo "Conectado";
      //  }
?>