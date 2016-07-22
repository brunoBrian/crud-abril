<?php

class Cliente
{

    private $conexao = null;

    /**
     * crio a instância da conexão e faço a autenticação no banco de dados
     */
    public function __construct(){
        $this->conexao = new PDO("mysql:host=localhost;dbname=crud_abril", "root", "");
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Lista todos os pedidos do banco de dados
     */
    public function lista(){
        $consulta = $this->conexao->query("SELECT * FROM clientes ORDER by criacao DESC ");
        $lista = array();
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            array_push($lista, $linha);
        }
        return $lista;
    }

    /**
     * Lista todos os pedidos do banco de dados
     */
    public function seleciona($id){
        $consulta = $this->conexao->prepare("SELECT * FROM clientes where id = :id ");
        $consulta->execute(array(
            ':id' => (int) $id,
        ));
        $lista = array();
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            array_push($lista, $linha);
        }
        return $lista;
    }

    /**
     * Método que salva um novo pedido
     * @param $cliente_id
     * @param $produto_id
     */
    public function criar($nome, $email, $telefone){
        try{
            $this->conexao = new PDO("mysql:host=localhost;dbname=crud_abril", "root", "");
            $stmt = $this->conexao->prepare('INSERT INTO clientes (criacao, nome, email, telefone) VALUES(:criacao, :nome, :email, :telefone)');
            $criar = $stmt->execute(array(
                ':criacao' => date('Y-m-d H:i:s'),
                ':nome' => $nome,
                ':email' => $email,
                ':telefone' => $telefone,
            ));
            if($criar){
                return true;
            }
            return false;
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    /**
     * Edita um pedido
     * @param $id
     * @param $client
     * @param $produto
     * @return bool|string
     */
    public function editar($id, $client, $produto){
        try{
            $this->conexao = new PDO("mysql:host=localhost;dbname=crud_abril", "root", "");
            $stmt = $this->conexao->prepare('UPDATE clientes SET cliente_id = :cliente_id and produto_id = :produto_id WHERE id = :id');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':cliente_id', $client, PDO::PARAM_INT);
            $stmt->bindParam(':produto_id', $produto, PDO::PARAM_INT);
            $editar = $stmt->execute();
            return $editar;
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    /**
     * deleta um pedido por id
     * @param $id
     */
    public function deletar($id){
        try{
            $sql = "delete from clientes where id = ".$id;
            if($this->conexao->query($sql)){
                $msg = "Deletado com sucesso!";
            }else{
                $msg = "Erro ao deletar!";
            }
            $this->conexao = null;
            return $msg;
        }catch (PDOException $e){
            $e->getMessage();
        }
    }


}