# PHP :: Agenda de Contatos

### Informações
- Desenvolvido em:
  - PHP 7.4
  - PDO (PHP Data Objects)
  - MySQL 5.7
  - Bootstrap 4.3
- O site foi modularizado por meio de _includes_
- Foi utilizado o conceito de Orientação de Objetos

|    Agenda      |
| :-------------:|
|![Agenda PHP CRUD](https://user-images.githubusercontent.com/105256021/172492910-784f5eb8-e4be-440d-8bb0-8cdec1de5887.gif)|

### Pre-Configurações
- `host`: **localhost**
- `user`: **root**
- `password` : (vazio)
- `data base`: **bd_crud**
- `tabela` : **tb_pessoas**

### Script para Banco de Dados
> Criar Banco de Dados (utf8_general_ci)
~~~SQL
CREATE DATABASE bd_crud
~~~

> Criar Tabela 
~~~SQL
CREATE TABLE IF NOT EXISTS `tb_pessoas` (
  `pes_id` 	       int(11)      NOT NULL AUTO_INCREMENT,
  `pes_nome` 	     varchar(100) DEFAULT NULL,
  `pes_telefone`   varchar(20)  DEFAULT NULL,
  `pes_email` 	   varchar(30)  DEFAULT NULL,
  `pes_nascimento` varchar(20)  DEFAULT NULL,
  PRIMARY KEY (`pes_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
~~~
