<?php

namespace App\Entity;

use App\DB\Database;
use \PDO;

class Cidade{
    public $codigo;
    public $nome;
    public $estado_codigo;
    public $foto;


    //Método responsável por cadastrar um cidade no bnaco de dados.
    public function cadastrar(){
        $obDatabase = new Database('cidade');
        
        $this -> codigo = $obDatabase->insert([
            'nome'                           => $this->nome,
            'estado_codigo'                  => $this->estado_codigo,
        ]);

        return true;
    }

    //Método responsável por atualizar o cidade no banco de dados.
    public function atualizar(){
        return (new Database('cidade'))->update('codigo= '.$this->codigo,[
            'nome'                           => $this->nome,
            'estado_codigo'                  => $this->estado_codigo,
        ]);
    }

    //Método responsável por excluir o cidade no banco de dados.
    public function excluir(){
        return (new Database('cidade')) -> delete('codigo = '.$this->codigo);
    }

    //Método responsável por obter os cidades no banco de dados.
    public static function getCidades($where = null, $order = null, $limit = null){
        return (new Database('cidade')) -> select($where,$order,$limit)
                                          -> fetchAll(PDO::FETCH_CLASS,self::class);
    }

    //Método responsável para obter um cidade no banco de dados.
    public static function getCidade($id){
        return(new Database('cidade')) -> select('codigo= '.$id)
                                         ->fetchObject(self::class);
    }


}


