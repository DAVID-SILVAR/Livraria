<?php

    require_once 'Livro.php';


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
            $query = $this->mysqli->query("SELECT * FROM tb_livros");
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }

        public function salvar($liv){
            $smt = $this->mysqli->prepare("INSERT INTO tb_livros (nome, editora, autor, paginas, valor) 
            VALUES (?,?,?,?,?)");

            if($this->smt == false){
                echo "Error: %s.\n", $this->mysqli->error;
            }else{

            }

        }




/*         public function setLivros($nome, $autor, $editora, $paginas, $valor){
            $query1 = ("INSERT INTO tb_livros (nome, editora, autor, paginas, valor) VALUES (?, ?, ?, ?, ?, ?)");
            $query = $this->mysqli->prepare($query1);
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
        } */




    }

?>