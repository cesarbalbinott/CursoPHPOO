<?php

require_once "GrauImportanciaInterface.php";
require_once "EnderecoCobrancaInterface.php";

class Cliente implements GrauImportanciaInterface, EnderecoCobrancaInterface
{
    protected $nome;
    protected $tipo;
    protected $endereco;
    protected $grau;
    protected $endecobranca;

    public function getTipo(){return $this->tipo;}
    public function setTipo($tipo){$this->tipo = $tipo; return $this;}
    public function getNome(){return $this->nome;}
    public function setNome($nome){$this->nome = $nome; return $this;}
    public function getEndereco(){return $this->endereco;}
    public function setEndereco($endereco){$this->endereco = $endereco; return $this;}

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
}
