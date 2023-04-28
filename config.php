<?php

       $dbHost = 'aws.connect.psdb.cloud';
       $dbUsername = 'xgsr2zh92tn882fcbpp7';
       $dbPassword = 'pscale_pw_9sjA5oIGkgJPUVuxpaMVgaN57HrSWpY1jphLWzMhnLC';
       $dbName = 'formulario_uniaraoil';
       $dbSSL->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);

       $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName,$dbSSL);

//   $mysqli = mysqli_init();
//   $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
//   $mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
//   $mysqli->close();


      //  if($conexao->connect_errno)
      //  {
      //   echo "Erro";
      //  }
      //  else 
      //  {
      //   echo "Conectado";
      //  }
?>