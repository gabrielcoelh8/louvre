<form action="<?php echo APP.'pintura/salvar'; ?>" method="post" class="container p-3 bg-dark-subtle text-light rounded m-2">
  <label for="exampleInputPassword1" class="mb-4">Cadastro de pinturas.</label>
  <div class="mb-3" hidden>
    <label for="id" class="form-label">ID</label>
    <input class='form-control' readonly type="text" name="id" value="<?php echo $pintura['id']; ?>">
  </div>

  <div class="mb-3">
    <div class="form-floating p-0">
        <input class="form-control" type="text" name="nome" value="<?php echo $pintura['nome']; ?>">
        <label for="nome">Nome:</label>
    </div>
  </div>

  <div class="mb-3">
    <div class="form-floating p-0">
        <input class="form-control" type="text" name="tecnica" value="<?php echo $pintura['tecnica']; ?>">
        <label for="tecnica">Técnica:</label>
    </div>
  </div>

  <div class="mb-3">
    <div class="form-floating p-0">
        <input class="form-control" type="text" name="ano_lancamento" value="<?php echo $pintura['ano_lancamento']; ?>">
        <label for="ano_lancamento">Ano de lançamento:</label>
    </div>
  </div>

  <div class="mb-3">
    <div class="form-floating p-0">
        <input class="form-control" type="text" name="url_imagem" value="<?php echo $pintura['url_imagem']; ?>">
        <label for="url_imagem">URL da imagem:</label>
    </div>
    <div id="nomeHelp" class="form-text">Imgur ou outros (ex: "img.ur/link.jpg").</div>
  </div>

  <div class="mb-3">
    <label for="artista" class="form-label small">Artista:</label>
    <select class="form-select" name="id_artista" >
      <?php
        foreach ($artistas as $artista) {
          $selected = $artista['id']==$pintura['id_artista']?'selected':'';
          echo "<option $selected value='{$artista['id']}'>{$artista['nome']}</option>";
        }
       ?>
    </select>  
  </div>

  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
