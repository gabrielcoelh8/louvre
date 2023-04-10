<a class="btn btn-dark m-2" href="<?php echo APP.'artista/novo'; ?>"><span class="material-symbols-outlined m-1">add</span></a>
   
   <div class='row row-cols-1 row-cols-md-3 g-4'>
     <?php
       foreach ($artistas as $artista) {
          $pathEditar = APP.'artista/editar';
          $pathExcluir = APP.'artista/excluir';
          $data = $artista['data_nascimento']!='' ? date('d/m/Y', strtotime($artista['data_nascimento'])) : '';
          $foto = $artista['url_imagem']!= ""? $artista['url_imagem'] : 'img/artista-generico.jpg';

          echo "
          <div class='col'>
            <div class='card h-100'>
              <img src='$foto' class='card-img-top m-1 w-auto' alt='...'>

              <div class='card-body'>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item'><small>Nome: </small><span class='badge rounded-pill text-bg-primary'>{$artista['nome']}</span></li>
                  <li class='list-group-item'><small>Data de nascimento: </small><span class='badge rounded-pill text-bg-secondary'>$data</span></li>
                </ul>
              </div>

              <div class='card-footer'>
                <div class='row d-flex justify-content-end'>
                  <a href='$pathEditar/{$artista['id']}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Edit</span></a>
                  <a href='$pathExcluir/{$artista['id']}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Delete</span></a>
                </div>
              </div>

            </div>
          </div>
        ";

       }
      ?>
</div>

  
