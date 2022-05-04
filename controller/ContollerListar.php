<?php
    session_start();

    require_once '../DAO/LivroDao.php';
    require_once '../model/Livro.php';
    require_once '../model/Banco.php';

    $liv = new Livro();
    $objBanco = new Banco();

    $dao = new LivroDao($objBanco, $liv);

    $lista = $dao->listar();
   /*  echo '<pre>';
    print_r($lista);
    echo '</pre>';
 */
    echo '<pre>';
    print_r($_SESSION['listaLivro'] = $lista) ;
    echo '</pre>';


?>