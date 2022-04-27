<?php
    require_once ("../config/connect.php");

    try{
        
        $con = new Conexao();

        echo 'Cenexão feita';

    }catch(Exception $ex){

        echo $ex;

    }

    








?>