<?php

require_once "GrauImportanciaInterface.php";
require_once "EnderecoCobrancaInterface.php";

class PessoaFisica extends Cliente implements JsonSerializable, GrauImportanciaInterface, EnderecoCobrancaInterface
{
    private $cpf;
    private $rg;
    private $idade;
    private $grau;
    private $endecobranca;

    public function getIdade(){return $this->idade;}
    public function setIdade($idade){$this->idade = $idade; return $this;}
    public function getCpf(){return $this->cpf;}
    public function setCpf($cpf){$this->cpf = $cpf; return $this;}
    public function getRg(){return $this->rg;}
    public function setRg($rg){$this->rg = $rg; return $this;}

    public function __construct(){

        $this->tipo = "Pessoa Fisica";
    }

    public function setGrau($grau)
    {
        $this->grau = $grau;
        return $this;
    }

    public function getGrau(){
        return $this->grau;}

    public function setEnderecoCobranca($endecobranca){
        $this->endecobranca = $endecobranca;
        return $this;
    }

    public function getEnderecoCobranca(){
        return $this->endecobranca;
    }

    public function JsonSerialize(){
        return [
            'nome' => $this->getNome(),
            'tipo' => $this->getTipo(),
            'endereco' => $this->getEndereco(),
            'cpf' => $this->getCpf(),
            'rg' => $this->getRg(),
            'idade' => $this->getIdade(),
            'grau' => $this->getGrau(),
            'endecobranca' => $this->getEnderecoCobranca()
        ];
    }
}