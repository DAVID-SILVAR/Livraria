<?php
    require_once '../model/Banco.php';
    require_once '../model/Livro.php';

    $con = new Banco;

    $objLivro = new Livro;

    $objLivro->setNome($_POST['nome']);
    $objLivro->setEditora($_POST['editora']);
    $objLivro->setAutor($_POST['autor']);
    $objLivro->setPaginas($_POST['paginas']);
    $objLivro->setValor($_POST['valor']);

    $con->salvar($objLivro);


    



?>