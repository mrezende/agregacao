<?php
declare(strict_types = 1);
require 'lib/Carbon.php';
use Carbon\Carbon;
require 'Turma.php';
require 'Aluno.php';



$turma = new Turma();
$turma->periodo = "Manhã";
$turma->serie = 5;
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";



$aluno = new Aluno("Rafael", Carbon::createFromDate(1984, 10, 30));


$aluno = new Aluno("Jonas", Carbon::createFromDate(1984, 10, 30));


$aluno = new Aluno("Gustavo", Carbon::createFromDate(1984, 10, 30));












// $aluno->turma = $turma;
//
// echo "Aluno: $aluno->nome" . PHP_EOL;
// echo "Mês de nascimento:" .
//     $aluno->dataDeNascimento->month
//      . PHP_EOL;
// echo "Periodo: {$aluno->turma->periodo}" . PHP_EOL;
