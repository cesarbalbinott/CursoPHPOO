<?php

require_once "GrauImportanciaInterface.php";
require_once "EnderecoCobrancaInterface.php";

class PessoaJuridica extends Cliente implements JsonSerializable, GrauImportanciaInterface, EnderecoCobrancaInterface
{
    private $cnpj;
    private $ie;
    private $grau;
    private $endecobranca;

    public function getCnpj(){return $this->cnpj;}
    public function setCnpj($cnpj){$this->cnpj = $cnpj; return $this;}
    public function getIe(){return $this->ie;}
    public function setIe($ie){$this->ie = $ie; return $this;}

    public function __construct(){
        $this->tipo = "Pessoa Juridica";
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
            'cnpj' => $this->getCnpj(),
            'ie' => $this->getIe(),
            'grau' => $this->getGrau(),
            'endecobranca' => $this->getEnderecoCobranca()
        ];
    }
}