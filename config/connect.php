<?php

    require_once 'caminho.php';


    class Conexao{  

        private $mysqli;

        public function __constrcut(){
            // com vaiaveis ($host, $usuario, $senha_db, $banco)
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        }

        public function getLivros(){
            
            $query = $this->mysqli->query('SELECT * FROM tb_livros');
            
            $retorno = [];

            $i = 0;

            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;

            }

        }

    }

?>