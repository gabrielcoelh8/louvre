<?php
  class EsculturaController extends Controller {

    function editar($id) {
      $model = new Escultura();
      $escultura = $model->getById($id);

      $modelArtista = new Artista();
      $artistas = $modelArtista->read();

      $this->view('frmEscultura', compact('escultura', 'artistas'));
    }

    function listar() {
      $model = new Escultura();
      $esculturas = $model->read();

      $this->view('listagemEscultura', compact('esculturas'));
    }

    function novo() {
      $escultura = array();
      $escultura['id'] = 0;
      $escultura['nome'] = "";
      $escultura['material'] = "";
      $escultura['descricao'] = "";
      $escultura['ano_lancamento'] = "";
      $escultura['url_imagem'] = "";
      $escultura['id_artista'] = 0;

      $modelArtista = new Artista();
      $artistas = $modelArtista->read();

      $this->view('frmEscultura', compact('escultura', 'artistas'));
    }

    function salvar() {
      $escultura = array();
      $escultura['id'] = $_POST['id'];
      $escultura['nome'] = $_POST['nome'];
      $escultura['material'] = $_POST['material'];
      $escultura['descricao'] = $_POST['descricao'];
      $escultura['ano_lancamento'] = $_POST['ano_lancamento'];
      $escultura['url_imagem'] = $_POST['url_imagem'];
      $escultura['id_artista'] = $_POST['id_artista'];

      $model = new Escultura();

      if ($escultura['id'] == 0) {
        $model->create($escultura);
      } else {
        $model->update($escultura);
      }

      $this->redirect("escultura/listar");
    }

    function excluir($id) {
      $model = new Escultura();
      $model->delete($id);
      $this->redirect("escultura/listar");
    }
  }
 ?>
