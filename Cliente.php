<?php
class Cliente{
    protected $nome;
    protected $tipo;
    protected $endereco;

    public function getTipo(){return $this->tipo;}
    public function setTipo($tipo){$this->tipo = $tipo; return $this;}
    public function getNome(){return $this->nome;}
    public function setNome($nome){$this->nome = $nome; return $this;}
    public function getEndereco(){return $this->endereco;}
    public function setEndereco($endereco){$this->endereco = $endereco; return $this;}
}
