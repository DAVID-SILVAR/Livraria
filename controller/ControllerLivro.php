<?php
    require_once '../DAO/LivroDao.php';
    require_once '../model/Livro.php';
    require_once '../model/Banco.php';


/*     echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */


    class LivroController{

        public function __construct($metodo){
            $this->metodo($metodo);
            
        }

        public function metodo($var){
            
            
            switch($var){

                case 'salvar':
                    $this->salvar();
                    break;
                case 'excluir':
                    $this->excluir();
                    break;
                case 'listar':
                    $this->listar();
                    break;
                case 'editar':
                    $this->editar();
                    break;
            }

        }



        public function salvar(){

            $liv = new Livro();
            $objconexao = new Banco();
            $dao = new LivroDao($objconexao, $liv);

            $liv->setNome($_POST['nome']);
            $liv->setEditora($_POST['editora']);
            $liv->setAutor($_POST['autor']);
            $liv->setPaginas($_POST['paginas']);
            $liv->setValor($_POST['valor']);

            $dao = new LivroDao($objconexao, $liv);
            $dao->salvar();
        }

        public function excluir(){

            $liv = new Livro();
            $objBanco = new Banco();

            $liv->setId($_POST['id']);

            $dao = new LivroDao($objBanco, $liv);
        }

        public function listar(){

            $liv = new Livro();
            $objBanco = new Banco();

            $dao = new LivroDao($objBanco, $liv);
            $dao->listar();

        }

        public function editar(){


        }

    }

    $metodo = $_GET['metodo'];

    $liv = new LivroController($metodo);


/*     if(isset($_GET['metodo']) && $_GET['metodo'] == 'salvar'){
        
        $liv->salvar();

    }else if(isset($_GET['metodo']) && $_GET['metodo'] == 'excluir'){

        $liv-> excluir();

    }else if (isset($_GET['metodo']) && $_GET['metodo'] == 'listar' ){
        
        $liv->listar();

    }else if (isset($_GET['metodo']) && $_GET['metodo'] == 'editar' ){
        
        $liv->editar();

    } */




?>

