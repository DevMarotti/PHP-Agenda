<?php

require_once ("app/Entity/Pessoa.php");

use Agenda\App\Entity\Pessoa;

define('TITLE','Cadastrar Contato');
define('COMAND','Cadastrar');
define('STYLE','success');


$objetoPessoa = new Pessoa();

if (isset( $_POST['nome'] )) {
    $objetoPessoa->pes_nome       = $_POST['nome'];
    $objetoPessoa->pes_telefone   = $_POST['telefone'];
    $objetoPessoa->pes_email      = $_POST['email'];
    $objetoPessoa->pes_nascimento = $_POST['nascimento'];
   
    $objetoPessoa->cadastrar();

    header('location: index.php?status=success-cadastrar');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
