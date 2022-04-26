<?php
    //Testes
    require_once('config/caminho.php');

    
    if($sql = $con->prepare("INSERT INT tb_livros (nome, editora, autor, paginas, valor) VALUES ('O pequeno Principe', 'Abril', 'José de Alencar', 276, 57)")){
       
        echo 'correto';

    }else{

        echo 'Deu errado';
    }






?>