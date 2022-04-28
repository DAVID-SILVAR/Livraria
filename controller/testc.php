<?php
    require_once ("../config/connect.php"); 
    
    

    try{

        $con = new banco();
        echo 'Conectado';

    }catch(Exception $ex){
        echo 'Não Conectado';
    }


    //$query = ("INSERT INTO tb_livros(nome, editora, autor, paginas, valor) VALUES ('O pequeno Principe', 'Abril', 'José de Alencar', 321, 80);");

    //$this->mysqli->prepare("INSERT INTO tb_livros(nome, editora, autor, paginas, valor) VALUES ('O pequeno Principe', 'Abril', 'José de Alencar', 321, 80);");



?>