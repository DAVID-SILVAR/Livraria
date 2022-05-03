<?php
    require_once '../model/Livro.php';

    class CadastroController{
        
        private $cadastro;


        public function __construct(){
            
            $this->cadastro = new Livro();
            //$this->cadastro->salvar();

        }

        public function salvar(){
            $this->cadastro->setNome($_POST['nome']);
            $this->cadastro->setEditora($_POST['editora']);
            $this->cadastro->setAutor($_POST['autor']);
            $this->cadastro->setPaginas($_POST['paginas']);
            $this->cadastro->setValor($_POST['valor']);

            $retorno = $this->cadastro->salvar();

            if($retorno >= 1){
                echo "<script> Registro incluido com sucesso <script>";
            }else{ 
                echo "<script> Falha ao tentar incluir registro <script>";
            }

        }

    }

    new CadastroController();

?>