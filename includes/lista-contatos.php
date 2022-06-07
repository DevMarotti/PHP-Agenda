<?php

// Mensagens de notificação dos CRUD 
$mensagem = '';
if(isset($_GET['status'])){
    switch ($_GET['status']) {
        case 'success-cadastrar':
        $mensagem = '<div class="alert alert-success alert-dimissible fade show" role="alert">
                        Contato cadastrado com sucesso!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        break;
        
        case 'success-editar':
        $mensagem = '<div class="alert alert-primary alert-dimissible fade show" role="alert">
                        Contato alterado com sucesso!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';                                                
        break;

        case 'success-excluir':
        $mensagem = '<div class="alert alert-danger alert-dimissible fade show" role="alert">
                        Contato excluído com sucesso!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';                        
        break;

        case 'error':
        $mensagem = '<div class="alert alert-danger">
                        Erro encontrado, ação não executada!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';                        
        break;
    }
}

// Populando a tabela com a lista de Contatos
$resultados = '';
foreach($listaPessoas as $pessoa){
    $resultados .= '<tr>
                        <td>'. $pessoa->pes_id            .'</td>
                        <td>'. $pessoa->pes_nome          .' </td>
                        <td>'. $pessoa->pes_telefone      .' </td>
                        <td>'. $pessoa->pes_email         .' </td>
                        <td>'. $pessoa->pes_nascimento    .' </td>
                        <td>
                        <a href="editar.php?id='  .$pessoa->pes_id. ' "><button type="button" class="btn btn-primary btn-sm">Editar</button></a> 
                        <a href="excluir.php?id=' .$pessoa->pes_id. ' "><button type="button" class="btn btn-danger btn-sm">Excluir</button></a>
                        </td>
                    </tr>';     
}

// Mensagem interna a tabela de contatos 
$resultados = strlen($resultados) ? $resultados : '<tr>
                                                    <td colspan="6" class="text-center">
                                                            Nenhum contato encontrado
                                                    </td>
                                                </tr>';
?>



<main>

    <?=$mensagem?>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo Contato</button>
        </a>
    </section>

    <section>       
        <table class="table text-dark bg-light mt-3">            
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data Nascimento</th>
                </tr>
            </thead>

            <tbody class="text-dark">        
                <?=$resultados?>
            </tbody>

        </table>
    </section>

</main>