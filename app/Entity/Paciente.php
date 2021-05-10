<?php

namespace App\Entity;

use App\DB\Database;
use \PDO;

class Paciente{
    public $codigo;
    public $CPF;
    public $nome;
    public $plano_saude;
    public $sexo;
    public $descrição;
    public $uti_codigo;
    public $enfermeiro_coren;
    public $crm_medico;
    public $enfermidade_codigo;


    //Método responsável por cadastrar um paciente no bnaco de dados.
    public function cadastrar(){
        $obDatabase = new Database('paciente');
        
        $this -> codigo = $obDatabase->insert([
            'CPF'                           => $this->CPF,
            'nome'                          => $this->nome,
            'plano_saude'                   => $this->plano_saude,
            'sexo'                          => $this->sexo,
            'descrição'                     => $this->descrição,
            'uti_codigo'                    => $this->uti_codigo,
            'enfermeiro_coren'              => $this->enfermeiro_coren,
            'crm_medico'                    => $this->crm_medico,
            'enfermidade_codigo'            => $this->enfermidade_codigo,
        ]);

        return true;
    }

    //Método responsável por atualizar o paciente no banco de dados.
    public function atualizar(){
        return (new Database('paciente'))->update('codigo= '.$this->codigo,[
            'CPF'                           => $this->CPF,
            'nome'                          => $this->nome,
            'plano_saude'                   => $this->plano_saude,
            'sexo'                          => $this->sexo,
            'descrição'                     => $this->descrição,
            'uti_codigo'                    => $this->uti_codigo,
            'enfermeiro_coren'              => $this->enfermeiro_coren,
            'crm_medico'                    => $this->crm_medico,
            'enfermidade_codigo'            => $this->enfermidade_codigo,
        ]);
    }

    //Método responsável por excluir o paciente no banco de dados.
    public function excluir(){
        return (new Database('paciente')) -> delete('codigo = '.$this->codigo);
    }

    //Método responsável por obter a view no banco de dados.
    public static function getPacienteView(){
        return (new Database('paciente')) -> view()
                                          -> fetchAll(PDO::FETCH_CLASS,self::class);
    }

    //Método responsável por obter os pacientes no banco de dados.
    public static function getPacientes($where = null, $order = null, $limit = null){
        return (new Database('paciente')) -> select($where,$order,$limit)
                                          -> fetchAll(PDO::FETCH_CLASS,self::class);
    }

    //Método responsável para obter um paciente no banco de dados.
    public static function getPaciente($id){
        return(new Database('paciente')) -> select('codigo= '.$id)
                                         ->fetchObject(self::class);
    }


}


