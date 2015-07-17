<?php

namespace CAB\Classes;

class PessoaJuridica extends \CAB\Classes\Cliente implements \JsonSerializable
{
    private $cnpj;
    private $ie;

    public function getCnpj(){return $this->cnpj;}
    public function setCnpj($cnpj){$this->cnpj = $cnpj; return $this;}
    public function getIe(){return $this->ie;}
    public function setIe($ie){$this->ie = $ie; return $this;}

    public function __construct(){
        $this->tipo = "Pessoa Juridica";
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