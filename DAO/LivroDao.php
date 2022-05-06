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
                $sql = 'INSERT INTO tb_livros (nome_livro, livro_editora_id, autor_livro, paginas_livro, valor_livro)  VALUES (:nome, :editora, :autor, :paginas, :valor)';
            
                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':nome', $this->book->getNome()); 
                $stmt->bindValue(':editora', $this->book->getEditora());
                $stmt->bindValue(':autor', $this->book->getAutor());
                $stmt->bindValue(':paginas', $this->book->getPaginas());
                $stmt->bindValue(':valor', $this->book->getValor());
                $stmt->execute();


            } catch (PDOException $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function excluir(){
            
            try{

                $sql = "DELETE FROM tb_livros WHERE id_livro = :id";

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':id', $this->book->getId());
                $stmt->execute();

            }catch(PDOException $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function listar(){

            try{

                $sql = 'SELECT * FROM tb_livros';
    
                $stmt = $this->banco->prepare($sql);
                $stmt->execute();

/*                 while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
                    $array[] = $row;
                } */
                $array = $stmt->fetchAll(PDO::FETCH_OBJ);
    
                return $array;

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }

        }

        public function buscar(){

            try{

                $sql = 'SELECT * FROM tb_livros WHERE id_livro = :id';

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':id', $this->book->getId());
                $stmt->execute();
                $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

                return $dados;

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function atualizar($a){

                $objLivro = $a;
                $sql = "update tb_livros set nome_livro = ?, livro_editora_id = ?, autor_livro = ?, paginas_livro = ?, valor_livro = ? where id_livro = ?";

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(1, $objLivro->getNome());
                $stmt->bindValue(2, $objLivro->getEditora());
                $stmt->bindValue(3, $objLivro->getAutor());
                $stmt->bindValue(4, $objLivro->getPaginas());
                $stmt->bindValue(5, $objLivro->getValor());
                $stmt->bindValue(6, $objLivro->getId());
    
                

                return $stmt->execute();


        }

    }

?>