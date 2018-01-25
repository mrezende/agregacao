<?php
use Carbon\Carbon;
class Aluno
{
  public $nome; // atributo de objeto
  public $dataDeNascimento; // atributo de objeto
  public $rg;
  public $turma;
  //atributo de classe
  public static $contador = 0;

  // construtor
  function __construct(string $nome, Carbon $dataDeNascimento)
  {
    $this->nome = $nome;
    $this->dataDeNascimento = $dataDeNascimento;
    self::$contador++;
    echo "Contador: " . Aluno::$contador . PHP_EOL;
  }
}
