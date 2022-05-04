<?php

    require_once '../DAO/LivroDao.php';
    require_once '../model/Livro.php';
    require_once '../model/Banco.php';

    $liv = new Livro();
    $objBanco = new Banco();

    
    $liv->setId($_POST['id']);


    $dao = new LivroDao($objBanco, $liv);
    $dao->deletar();


?>