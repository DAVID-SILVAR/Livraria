<?php

    class Editora{
        private $nome_editora;
        private $cnpj;


        public function setNome($string){
            $this->nome_editora = $string;
        }
        public function setCnpj($string){
            $this->cnpj = $string;
        }

        public function getNome(){
            return $this->nome_editora;
        }
        public function getCnpj(){
            return $this->cnpj;
        }

    }
?>