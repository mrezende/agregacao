<?php

class Aluno
{
  public $nome;
  public $dataDeNascimento;
  public $rg;
  public $turma;

  // construtor
  function __construct(string $nome, Carbon $dataDeNascimento)
  {
    $this->nome = $nome;
    $this->dataDeNascimento = $dataDeNascimento;
    echo "Aluno criado" . PHP_EOL;
  }
}
