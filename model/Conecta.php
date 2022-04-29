<?php

    $host = '127.0.0.1';
    $usuario = 'root';
    $senha_db = '123456';
    $banco = 'db_livraria';

    class Banco{  

        protected $mysqli;

        public function __construct(){
            $this->conexao;
        }

        public function conexao(){
            
            $this->mysqli = new mysqli($host, $usuario, $senha_db, $banco);
        }

        public function getLivros(){
            //Outra maneira de retonar o metodo get
            /*$query = $this->mysqli->query('SELECT * FROM tb_livros');
            
            $retorno = [];

            $i = 0;

            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }*/

            $result = $this->mysqli->query("SELECT * FROM tb_livros");
            while($row = $result->fetch_array(MYSQL_ASSOC)){
                $array[] = $row;
            }
            return $array;
        }

        public function setLivros($nome, $autor, $editora, $paginas, $valor){
            $query = $this->mysqli->prepare("INSERT INTO tb_livros (nome, editora, autor, paginas, valor) VALUES (?, ?, ?, ?, ?, ?)");
            $query->bind_param('sssii', $nome, $autor, $editora, $paginas, $valor);

            if($query->execute() == true){  
                return true;
            }else{
                return false;
            }
        }
        public function pesquisaLivroId($id){
            $result = $this->mysqli->query("SELECT * FROM nome='$id'");
            //$query = $this->mysqli->prepare("SELECT * FROM nome='$id'");
            return $result->fetch_array(MYSQL_ASSOC);
        }

    }

?>