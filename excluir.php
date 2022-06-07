<?php

require_once ("app/Entity/Pessoa.php");
use Agenda\App\Entity\Pessoa;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

$objetoPessoa = Pessoa::getPessoa($_GET['id']);

if(!$objetoPessoa instanceof Pessoa){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['excluir'])){
  $objetoPessoa->excluir();
  header('location: index.php?status=success-excluir');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';