<?php

    require_once '../DAO/LivroDao.php';
    require_once '../model/Livro.php';
    require_once '../model/Banco.php';
    session_start();

     
   /*  echo '<pre>';
    print_r($_GET);
    echo '</pre>' ;   
 */
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
                case 'buscar':
                    $this->buscar();
                    break;
                case 'atualizar':
                    $this->atualizar();
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
            
            header('location: ../view/index.php');

        }

        public function excluir(){

            $liv = new Livro();
            $objBanco = new Banco();

            $livroId = $_GET['id'];

            $liv->setId($livroId);

            $dao = new LivroDao($objBanco, $liv);
            $dao->excluir();
            header('location:../view/index.php');
        }

        public function listar(){

            $liv = new Livro();
            $objBanco = new Banco();

            $dao = new LivroDao($objBanco, $liv);

            
            $lista = $dao->listar();

            $_SESSION['listaLivro'] = $lista;

            header("location: ../view/listar.php ");

        }

        public function buscar(){
            
            $liv = new Livro();
            $objBanco = new Banco();
            $dao = new LivroDao($objBanco, $liv);

            $liv->setId($_GET['id']);

            $busca = $dao->buscar();

            $_SESSION['buscar'] = $busca;

            header("location: ../view/editar.php ");

        }

        public function atualizar(){

            $liv = new Livro();
            $objBanco = new Banco();

            $liv->setNome($_POST['nome']);
            $liv->setEditora($_POST['editora']);
            $liv->setAutor($_POST['autor']);
            $liv->setPaginas($_POST['paginas']);
            $liv->setValor($_POST['valor']);

            $dao = new LivroDao($objBanco, $liv);

            print_r($dao->atualizar($liv));

        }


    }

    $metodo = $_GET['metodo'];
    $liv = new LivroController($metodo);

?>

