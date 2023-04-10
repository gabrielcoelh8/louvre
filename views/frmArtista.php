<form action="<?php echo APP.'artista/salvar'; ?>" method="post" class="container p-3 bg-dark-subtle text-light rounded m-2">
  <label for="exampleInputPassword1" class="mb-4">Cadastro de artistas.</label>
  <div class="mb-3" hidden>
    <label for="id" class="form-label">ID</label>
    <input readonly class="form-control" readonly type="text" name="id" value="<?php echo $artista['id']; ?>">
  </div>
  <div class="mb-3">
    <div class="form-floating p-0">
        <input type="text" class="form-control" type="text" name="nome" value="<?php echo $artista['nome']; ?>">
        <label for="nome">Nome do artista:</label>
    </div>
  </div>
  <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de nascimento:</label>
        <input class="form-control" type="date" name="data_nascimento" value="<?php echo $artista['data_nascimento']; ?>">
  </div>
  <div class="mb-3">
    <div class="form-floating p-0">
        <input class="form-control" type="text" name="url_imagem" value="<?php echo $artista['url_imagem']; ?>">
        <label for="floatingInputGrid">URL da imagem:</label>
    </div>
    <div id="nomeHelp" class="form-text">Imgur ou outros (ex: "img.ur/link.jpg").</div>
  </div>

  <button type="submit" name="button" class="btn btn-primary">Salvar</button>
</form>