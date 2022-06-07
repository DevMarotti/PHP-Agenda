<?php
require_once ("app/Entity/Pessoa.php");
use Agenda\App\Entity\Pessoa;


define('TITLE','Editar Contato');
define('COMAND','Alterar');
define('STYLE','primary');

if ( !isset( $_GET['id'] ) or  !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}    

$objetoPessoa = Pessoa::getPessoa($_GET['id']);

if ( !($objetoPessoa instanceof Pessoa) ) {
    header('location: index.php?status=error');
    exit;
}    


if (isset( $_POST['nome'] )) {
    $objetoPessoa->pes_nome       = $_POST['nome'];
    $objetoPessoa->pes_telefone   = $_POST['telefone'];
    $objetoPessoa->pes_email      = $_POST['email'];
    $objetoPessoa->pes_nascimento = $_POST['nascimento'];
    
    $objetoPessoa->atualizar();

    header('location: index.php?status=success-editar');
    exit;
}



include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
