<?php

namespace CAB\Classes;

class Cliente implements \EnderecoCobrancaInterface, \GrauImportanciaInterface, \JsonSerializable
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

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
