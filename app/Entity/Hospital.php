<?php

namespace App\Entity;

use App\DB\Database;
use \PDO;

class Hospital{
    public $codigo;
    public $cep;
    public $nome;
    public $administrador_name;
    public $administrador_cpf;
    public $administrador_nasc;
    public $administrador_sexo;
    public $inicio_gerencia;
    public $cidade_codigo;


    //Método responsável por cadastrar um hospital no bnaco de dados.
    public function cadastrar(){
        $obDatabase = new Database('hospital');
        
        $this -> codigo = $obDatabase->insert([
            'cep'                            => $this->cep,
            'nome'                           => $this->nome,
            'administrador_name'             =>$this->administrador_name,
            'administrador_cpf'              =>$this->administrador_cpf,
            'administrador_nasc'             =>$this->administrador_nasc,
            'administrador_sexo'             =>$this->administrador_sexo,
            'inicio_gerencia'                =>$this->inicio_gerencia,
            'cidade_codigo'                  =>$this->cidade_codigo
        ]);

        return true;
    }

    //Método responsável por atualizar o hospital no banco de dados.
    public function atualizar(){
        return (new Database('hospital'))->update('codigo= '.$this->codigo,[
            'cep'                           => $this->cep,
            'nome'                          => $this->nome,
            'administrador_name'            =>$this->administrador_name,
            'administrador_cpf'             =>$this->administrador_cpf,
            'administrador_nasc'            =>$this->administrador_nasc,
            'administrador_sexo'            =>$this->administrador_sexo,
            'inicio_gerencia'               =>$this->inicio_gerencia,
            'cidade_codigo'                 =>$this->cidade_codigo
        ]);
    }

    //Método responsável por excluir o hospital no banco de dados.
    public function excluir(){
        return (new Database('hospital')) -> delete('codigo = '.$this->codigo);
    }

    //Método responsável por obter os hospitais no banco de dados.
    public static function getHospitais($where = null, $order = null, $limit = null){
        return (new Database('hospital')) -> select($where,$order,$limit)
                                          -> fetchAll(PDO::FETCH_CLASS,self::class);
    }

    //Método responsável para obter um hospital no banco de dados.
    public static function getHospital($id){
        return(new Database('hospital')) -> select('codigo= '.$id)
                                         -> fetchObject(self::class);
    }

    //Método responsável para obter a procedure no bnaco de dados.
    public static function getHospitalProcedure($valor){
        return(new Database()) -> procedure($valor)
                               -> fetchObject(self::class);
    }


}


