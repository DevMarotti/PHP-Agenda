<?php
//Conceito de queryBuilder 
namespace App\DB;

use \PDO;
use \PDOException;

class Database{
    const HOST     = 'localhost';
    const DB_NAME  = 'bd_crud';
    const USER     = 'root';
    const PASSWORD = '';

    private $table;
    private $connection;

    // define a tabela do BD e instancia um objeto de conexão PDO
    public function __construct($table){
        $this->table = $table;
        $this->setConnection();
    }


    /* **********************     Métodos para Conexão    *********************** */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='. self::HOST .';dbname='. self::DB_NAME,
                                            self::USER,
                                            self::PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error){
         die ('Error: ' . $error->getMessage());
        }
    }

    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch (PDOException $error){
            die ('Error: ' . $error->getMessage());
        }
    }


    /* **********************     Métodos CRUD com o Banco Dados    *********************** */
    // Inserir
    public function insert($values){
        $fields = array_keys($values);
        $binds  = array_pad([], count($fields), '?');
        $query = 'INSERT INTO '. $this->table .' ('. implode(',', $fields) .') VALUES ('. implode(',', $binds) .')';
        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();
    }

    // Buscar
    public function select($where = null, $order = null, $limit = null, $fields= '*'){
        $where = strlen($where) ? 'WHERE '.$where     : '';
        $order = strlen($order) ? 'ORDER BY '.$order  : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit     : '';
        $query = 'SELECT '. $fields .'  FROM '. $this->table  .' '.$where.' '.$order.' '.$limit;

        return $this->execute($query);
    }

    // Atualizar
    public function update($where, $values){
        $fields = array_keys($values);
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
        $this->execute($query,array_values($values));
    
        return true;
    }

    // Deletar
    public function delete($where){
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
        $this->execute($query);
    
        return true;
    }

}
