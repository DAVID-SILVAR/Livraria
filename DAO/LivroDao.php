<?php
    require_once '../model/Banco.php';
    require_once '../model/Livro.php';

    class LivroDao{

        private $banco;
        private $book;

        public function __construct(Banco $objBanco, Livro $objLivro){
            
            $this->banco = $objBanco->Conecta();
            $this->book = $objLivro;

        }

        public function salvar(){

            try {
                $sql = 'INSERT INTO tb_livros (nome, editora, autor, paginas, valor) VALUES (:nome, :editora, :autor, :paginas, :valor)';
            
                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':nome', $this->book->getNome()); 
                $stmt->bindValue(':editora', $this->book->getEditora());
                $stmt->bindValue(':autor', $this->book->getAutor());
                $stmt->bindValue(':paginas', $this->book->getPaginas());
                $stmt->bindValue(':valor', $this->book->getValor());
                $stmt->execute();

            } catch (PDOException $e){
                return $e->getCode(). 'Mensagem: ' . $e->getMessage();
            }

        }

        public function deletar(){
            try{

                $sql = "DELETE FROM tb_livros WHERE id = :id";

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':id', $this->book->getId());
                $stmt->execute();

            }catch(PDOException $e){
                return $e->getCode(). 'Mensagem: ' . $e->getMessage();
            }


        }

        public function listar(){

            try{

                $sql = 'SELECT * FROM tb_livros';
    
                $stmt = $this->banco->prepare($sql);
                $stmt->execute();

                /* while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
                    $array[] = $row;
                } */
                $array = $stmt->fetchAll(PDO::FETCH_OBJ);
    
                return $array;

            }catch(Exception $e){
                return $e->getCode(). 'Mensagem: ' . $e->getMessage();
            }


        }

        public function buscar(){

            try{

                $sql = 'SELECT * FROM tb_livros WHERE id = :id';

                $stmt = $this->banco->pepare($sql);
                $stmt->bindValue(':id', $this->book->getId());
                $stmt->execute();
                $array = $stmt->fetchAll(PDO::FETCH_OBJ);
    
                return $array;

            }catch(Exception $e){
                return $e->getCode(). 'Mensagem: ' . $e->getMessage();
            }


        }


    }

?>