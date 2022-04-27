<?php

    //Configura o fuso horário padrão
    date_default_timezone_set('America/Sao_Paulo');

    //Declaro o caminho do banco através das constantes
    define('BD_SERVIDOR', '127.0.0.1');
    define('BD_USUARIO', 'root');
    define('BD_SENHA', '123456');
    define('BD_BANCO', 'db_livraria');

    $host = '127.0.0.1';
    $usuario = 'root';
    $senha_db = '123456';
    $banco = 'db_livraria';


    /*try{
            
        $con = new PDO('BD_SERVIDOR', 'BD_USUARIO', 'BD_SENHA', 'BD_BANCO');
        echo 'certo';
            
    }catch(PDOException $ex){
        echo $ex;
    }

    //$mysqli = new mysqli('BD_SERVIDOR', 'BD_USUARIO', 'BD_SENHA', 'BD_BANCO');
    $mysqli = new mysqli($host, $usuario, $senha_db, $banco);

    if($mysqli->connect_errno){
        echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }*/
    
?>