<?php

class PessoaFisica extends Cliente implements JsonSerializable
{
    private $cpf;
    private $rg;
    private $idade;

    public function getIdade(){return $this->idade;}
    public function setIdade($idade){$this->idade = $idade; return $this;}
    public function getCpf(){return $this->cpf;}
    public function setCpf($cpf){$this->cpf = $cpf; return $this;}
    public function getRg(){return $this->rg;}
    public function setRg($rg){$this->rg = $rg; return $this;}

    public function __construct(){

        $this->tipo = "Pessoa Fisica";
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