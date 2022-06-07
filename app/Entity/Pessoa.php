<?php
namespace Agenda\App\Entity;

require_once ("app/DB/Database.php");
use \App\DB\Database;
use \PDO;


class Pessoa{

    public $pes_id;
    public $pes_nome;
    public $pes_telefone;
    public $pes_email;
    public $pes_nascimento;
    public $pes_data_cadastro;

    /* **********************     Métodos CRUD com Objeto Pessoa    *********************** */   
    public function cadastrar(){    
        $objetoDatabase = new Database('tb_pessoas');
        $this->pes_id = $objetoDatabase->insert([
                                            'pes_nome'           =>  $this->pes_nome,
                                            'pes_telefone'       =>  $this->pes_telefone,
                                            'pes_email'          =>  $this->pes_email,
                                            'pes_nascimento'     =>  $this->pes_nascimento                                            
                                        ]);
        return true;                                           
    }
    
    public function atualizar(){
        return (new Database('tb_pessoas'))->update('pes_id = '. $this->pes_id, [
                                                                            'pes_nome'           =>  $this->pes_nome,
                                                                            'pes_telefone'       =>  $this->pes_telefone,
                                                                            'pes_email'          =>  $this->pes_email,
                                                                            'pes_nascimento'     =>  $this->pes_nascimento,
                                                                        ]);                                                                                                                                                                    
    }

    public function excluir(){
        return (new Database('tb_pessoas'))->delete('pes_id = '.$this->pes_id);
    }

    public static function getPessoas($where = null, $order = null, $limit = null){
        return (new Database('tb_pessoas'))->select($where, $order, $limit)
                                           ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getPessoa($id){
        return (new Database('tb_pessoas'))->select('pes_id = '. $id)
                                           ->fetchObject(self::class);
    }

}