<?php

    require_once '../DAO/EditoraDao.php';
    require_once '../model/Editora.php';
    require_once '../model/Banco.php';


    class EditoraController{

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

            $edit = new Editora();
            $objconexao = new Banco();
            $dao = new EditoraDao($objconexao, $edit);

            $edit->setNome($_POST['nome']);

            //$dao = new EditoraDao($objconexao, $edit);
            $dao->salvar();

            header('location: ../view/formEditora.php?editoraCriada');
        }

        public function excluir(){

            $edit = new Editora();
            $objBanco = new Banco();

            $edit->setId($_POST['id']);

            $dao = new LivroDao($objBanco, $edit);
        }

        public function listar(){

            $edit = new Editora();
            $objBanco = new Banco();

            $dao = new LivroDao($objBanco, $edit);
            $lista = $dao->listar();

            $_SESSION['listaEditora'] = $lista;

        }

        public function editar(){

        }




    }

    $metodo = $_GET['metodo'];

    $liv = new EditoraController($metodo);


?>