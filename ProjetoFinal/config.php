<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword =  '';
    $dbName = 'camila_db';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   // if ($conexao->connect_erro)
   //  {
   //     echo "Erro";
   // }
   // else {
   //     echo "Conexão estabelecida!";
   // }
?>