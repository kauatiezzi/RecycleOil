<?php

    if(!empty($_GET['idsolicitacoes']))
    {
        include_once('config.php');

        $idsolicitacoes = $_GET['idsolicitacoes'];

        $sqlSelect = "SELECT *  FROM solicitacoes WHERE idsolicitacoes=$idsolicitacoes";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM solicitacoes WHERE idsolicitacoes=$idsolicitacoes";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>