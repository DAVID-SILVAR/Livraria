<?php
    require_once '../DAO/LivroDao.php';
    require_once '../model/Livro.php';
    require_once '../model/Banco.php';

    //print_r($_POST);



    $liv = new Livro();

    $liv->setNome($_POST['nome']);
    $liv->setEditora($_POST['editora']);
    $liv->setAutor($_POST['autor']);
    $liv->setPaginas($_POST['paginas']);
    $liv->setValor($_POST['valor']);

    $objconexao = new Banco();

    $DAO = new LivroDao($objconexao, $liv);
    $DAO->salvar();


?>