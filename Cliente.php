<?php
class Cliente{
  public $nome;
  public $idade;
  public $cpf;
  public $endereco;

    public function __construct($nome, $idade, $cpf, $endereco){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }
}
