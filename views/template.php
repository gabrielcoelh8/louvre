<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Louvre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href=<?php echo APP.'style.css'?>>
  </head>

  <body>

    <!--navbar-->
    <section class="">
      <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo APP; ?>">
          <img src="<?php echo APP.'img/icon.png'; ?>" style="width: auto; height: 50px;" alt='...'>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;" id="navbarScroll">
            <ul class="nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo APP; ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?php echo APP.'artista/listar'; ?>">Artistas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?php echo APP.'pintura/listar'; ?>">Pinturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo APP.'escultura/listar'; ?>">Esculturas</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>
    </section>
      

      <section class="container p-2 rounded" data-bs-theme="dark">
        <?php
        require_once $arquivo;
        ?>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>