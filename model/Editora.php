<?php

    class Editora{
        
        private $nome_editora;
        private $id_editora;


        public function setNome($string){
            $this->nome_editora = $string;
        }
        public function setCnpj($string){
            $this->id_editora = $string;
        }

        public function getNome(){
            return $this->nome_editora;
        }
        public function getId(){
            return $this->id_editora;
        }


    }
?>