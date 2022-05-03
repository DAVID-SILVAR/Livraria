<?php
    require_once '../model/Conecta.php';

    class ListarController{
        
        //private $listar;

        public function __construct(){
            
            $listar = new Banco;
            $this->ListarLivros();

        }

        public function ListarLivros(){

            $row = $this->listar->getLivros();

            foreach ($row as $values){
                
                echo $values['id'];
                echo '<br>';
                echo $values['nome'];
                echo '<br>';
                echo $values['editora'];
                echo '<br>';
                echo $values['autor'];
                echo '<br>';
                echo $values['paginas'];
                echo '<br>';
                echo $values['valor'];

            }
        }

    }
    
    $listar->getLivros();

?>