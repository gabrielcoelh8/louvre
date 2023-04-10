<a class="btn btn-dark m-2" href="<?php echo APP.'pintura/novo'; ?>"><span class="material-symbols-outlined m-1">add</span></a>
   
   <div class='row row-cols-1 row-cols-md-3 g-4'>
     <?php
       foreach ($pinturas as $pintura) {
          $pathEditar = APP.'pintura/editar';
          $pathExcluir = APP.'pintura/excluir';
          $foto = $pintura['url_imagem']!= ""? $pintura['url_imagem']: APP.'img/quadro-generico.jpg';

          echo "
          <div class='col'>
            <div class='card h-100'>
              <img src='$foto' class='card-img-top m-1 w-auto' alt='...'>

              <div class='card-body'>
                <ul class='list-group list-group-flush'>

                  <li class='list-group-item'><small>Nome: </small><span class='badge rounded-pill text-bg-primary'>{$pintura['nome']}</span></li>

                  <li class='list-group-item'><small>Técnica: </small><span class='badge rounded-pill text-bg-secondary'>{$pintura['tecnica']}</span></li>

                  <li class='list-group-item'><small>Ano de lançamento: </small><span class='badge rounded-pill text-bg-warning'>{$pintura['ano_lancamento']}</span></li>

                  <li class='list-group-item'><small>Artista: </small><span class='badge rounded-pill text-bg-danger'>{$pintura['artista_nome']}</span></li>
                  
                </ul>
              </div>

              <div class='card-footer'>
                <div class='row d-flex justify-content-end'>
                  <a href='$pathEditar/{$pintura['id']}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Edit</span></a>
                  <a href='$pathExcluir/{$pintura['id']}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Delete</span></a>
                </div>
              </div>

            </div>
          </div>
        ";
       }
      ?>
    </div>