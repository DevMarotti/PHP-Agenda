<?php

require_once ("app/Entity/Pessoa.php");
use Agenda\App\Entity\Pessoa;

// instância para poular a tabela de Contatos
$listaPessoas = Pessoa::getPessoas();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/lista-contatos.php';
include __DIR__.'/includes/footer.php';
