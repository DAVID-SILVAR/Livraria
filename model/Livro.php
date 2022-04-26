<?php

    class Livro{
        
        private $nome;
        private $autor;
        private $editora;
        private $valor;
        private $paginas;

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
    }

?>