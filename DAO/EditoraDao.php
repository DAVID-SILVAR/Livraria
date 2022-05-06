<?php
    require_once '../model/Banco.php';
    require_once '../model/Editora.php';

    class EditoraDao{

        private $banco;
        private $edit;


        public function __construct(Banco $objBanco, Editora $objEditora){
            $this->banco = $objBanco->Conecta();
            $this->edit = $objEditora;
        }

        public function salvar(){

            try {
                $sql = 'INSERT INTO tb_editoras (nome_editora)  VALUES (:nome)';
            
                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':nome', $this->edit->getNome()); 

                $stmt->execute();

            } catch (Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function excluir(){
            
            try{

                $sql = "DELETE FROM tb_editoras WHERE id_editora = :id";

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':id', $this->edit->getId());
                $stmt->execute();

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function listar(){

            try{

                $sql = 'SELECT * FROM tb_editoras';
    
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

                $sql = 'SELECT * FROM tb_editoras WHERE id_editora = :id';

                $stmt = $this->banco->prepare($sql);
                $stmt->bindValue(':id', $this->edit->getId());
                $stmt->execute();
                $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

                if($dados->num_rows != 0){
                    return $dados;
                }else{
                    return 'Editora não existe!';
                }

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }
        }

        public function editar(){

            try{
                $sql = 'UPDATE tb_editoras SET nome_editora = :nome';

                $stmt-> bindValue(":nome", $this->edit->getNome());
    
                $stmt = $this->banco->prepare($sql);
                $stmt->execute();

            }catch(Exception $e){
                return $e->getCode().'Mensagem: '.$e->getMessage();
            }

        }

    }


?>