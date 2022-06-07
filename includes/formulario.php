
<main>

    <div class="alert alert-<?=STYLE?>  fade show" role="alert">
        <h2 class="mt-2"><?=TITLE?></h2>
    </div>    

    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?=$objetoPessoa->pes_nome?>">
        </div> 

        <div class="form-group">    
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?=$objetoPessoa->pes_telefone?>">            
        </div>            
        
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" value="<?=$objetoPessoa->pes_email?>">  
        </div>
        
        <div class="form-group">            
            <label>Nascimento</label>
            <input type="text" class="form-control" name="nascimento" value="<?=$objetoPessoa->pes_nascimento?>">  
        </div>
        
        <div class="form-gropup">
            <button type="submit" class="btn btn-<?=STYLE?> float-right"><?=COMAND?></button>
        </div>
    </form>

    <section>
        <a href="index.php">
            <button class="btn btn-secondary mt-5 btn-sm">Voltar</button>
        </a>
    </section>

</main>