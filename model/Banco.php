<?php
 
    class Banco{ 
       
        //public $dns = "mysql:host=127.0.0.1;dbname=db_livraria";
       

        public function Conecta(){
            try{
                $obj = new PDO("mysql:host=127.0.0.1;dbname=db_livraria","root", "123456", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
               
                return $obj;

            }catch(PDOException $e){
                echo $e->getCode(). 'Mensagem: ' . $e->getMessage();
            }  
        }


    }

/*     $dns = "mysql:host=127.0.0.1;dbname=db_livraria";
    $db_user = 'root';
    $db_senha = '123456';


    $obj = new PDO("mysql:host=127.0.0.1;dbname=db_livraria", $db_user, $db_senha);

    $sql = 'CREATE TABLE TTT(
        NOME VARCHAR(50)
    )';

        $obj->exec($sql); */

?>