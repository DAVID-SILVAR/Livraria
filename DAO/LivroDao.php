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

        public function buscarId(){

            try{

                $sql = 'SELECT * FROM tb_livros WHERE id_livro = :id';

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':id', $this->book->getId());
                $stmt->execute();
                $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

                if($dados->num_rows == 0){
                    return $dados;
                }else{
                    return 'livro não existe!';
                }

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function editar(){

            try{
                $sql = 'UPDATE tb_livos SET nome_livro = :nome, livro_editora_id = :id_editora, autor_livro = :autor, paginas_livro = :paginas, valor_livro = :valor';

                $stmt-> bindValue(":nome", $this->book->getNome());
                $stmt->bindValue(":valor_livro", $this->book->getEditora());
                $stmt->bindValue(":autor", $this->book->getAutor());
                $stmt->bindValue(":paginas", $this->book->getPaginas());
                $stmt->bindValue(":valor", $this->book->getValor());
    
                $stmt = $this->banco->prepare($sql);
                $stmt->execute();

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }

        }

    }

?>