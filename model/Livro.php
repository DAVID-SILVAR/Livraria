<?php
    require_once 'Banco.php';


    class Livro extends Banco {
        
        private $nome;
        private $autor;
        private $editora;
        private $paginas;      
        private $valor;        

        // Metodos set
        public function setNome($string){
           $this->nome = $string; 
        }
        public function setAutor($string){
            $this->autor = $string;
        }
        public function setEditora($string){
            $this->editora = $string;
        }
        public function setValor($string){
            $this->valor = $string;
        }
        public function setPaginas($string){
            $this->paginas = $string;
        }

        // Metodos get
        public function getNome(){
            return $this->nome;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function getEditora(){
            return $this->editora;
        }
        public function getValor(){
            return $this->valor;
        }
        public function getPaginas(){
            return $this->paginas;
        }

/*         public function __construct(){
            return $this->setLivros($this->getNome(), $this->getEditora(), $this->getAutor(), $this->getPaginas(), $this->getValor());

        } */


        public function salvar($nome, $editora, $autor, $paginas, $valor){
            return $this->setLivros($this->getNome(), $this->getEditora(), $this->getAutor(), $this->getPaginas(), $this->getValor());
        }

    }

?>