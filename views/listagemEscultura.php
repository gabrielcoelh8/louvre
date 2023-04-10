<a class="btn btn-dark m-2" href="<?php echo APP.'escultura/novo'; ?>"><span class="material-symbols-outlined m-1">add</span></a>
   
   <div class='row row-cols-1 row-cols-md-3 g-4'>
     <?php
       foreach ($esculturas as $escultura) {
          $pathEditar = APP.'escultura/editar';
          $pathExcluir = APP.'escultura/excluir';
          $foto = $escultura['url_imagem']!= ""? $escultura['url_imagem']: APP.'img/escultura-generica.jpg';

          echo "
          <div class='col'>
            <div class='card h-100'>
              <img src='$foto' class='card-img-top m-1 w-auto' alt='...'>

              <div class='card-body'>
                <ul class='list-group list-group-flush'>

                  <li class='list-group-item'><small>Nome: </small><span class='badge rounded-pill text-bg-primary'>{$escultura['nome']}</span></li>

                  <li class='list-group-item'><small>Material: </small><span class='badge rounded-pill text-bg-secondary'>{$escultura['material']}</span></li>

                  <li class='list-group-item'><small>Descrição: </small><span class='badge rounded-pill text-bg-warning'>{$escultura['descricao']}</span></li>

                  <li class='list-group-item'><small>Ano de Lançamento: </small><span class='badge rounded-pill text-bg-danger'>{$escultura['ano_lancamento']}</span></li>

                  <li class='list-group-item'><small>Nome do artista: </small><span class='badge rounded-pill text-bg-primary'>{$escultura['artista_nome']}</span></li>
                  
                </ul>
              </div>

              <div class='card-footer'>
                <div class='row d-flex justify-content-end'>
                  <a href='$pathEditar/{$escultura['id']}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Edit</span></a>
                  <a href='$pathExcluir/{$escultura['id']}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Delete</span></a>
                </div>
              </div>

            </div>
          </div>
        ";

       }
      ?>
</div>
