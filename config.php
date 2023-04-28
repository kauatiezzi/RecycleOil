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
  $conexao = "mysql:host={aws.connect.psdb.cloud};dbname={formulario_uniaraoil}";
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
  );
  $pdo = new PDO($conexao, ["xgsr2zh92tn882fcbpp7"], ["pscale_pw_9sjA5oIGkgJPUVuxpaMVgaN57HrSWpY1jphLWzMhnLC"], $options);
?>