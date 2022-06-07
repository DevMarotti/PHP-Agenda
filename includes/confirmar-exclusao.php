<main>

  <h2 class="mt-3">Excluir Contato</h2>

  <form method="post">

    <div class="form-group mt-5 mb-4">
      <div class="alert alert-warning alert-dimissible fade show" role="alert">
        Deseja realmente excluir o contato <strong><?=$objetoPessoa->pes_nome?></strong> ?
      </div>  
    </div>

    <div class="form-group">
      <a href="index.php">
        <button type="button" class="btn btn-secondary">Cancelar</button>
      </a>

      <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</div>

</main>