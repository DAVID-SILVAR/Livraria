<?php
    session_start();

    require_once '../DAO/LivroDao.php';
    require_once '../model/Livro.php';
    require_once '../model/Banco.php';

    $liv = new Livro();
    $objBanco = new Banco();

    $liv->setId($_POST['idBuscar']);

    $dao = new LivroDao($objBanco, $liv);

    $obj = $dao->buscarId();

    echo '<pre>';
    print_r($_SESSION['buscarId'] = $obj) ;
    echo '</pre>';



?>