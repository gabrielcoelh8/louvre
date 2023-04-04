<?php
  class PinturaController extends Controller {

    function editar($id) {
      $model = new Pintura();
      $pintura = $model->getById($id);

      $modelArtista = new Artista();
      $artistas = $modelArtista->read();

      $this->view('frmPintura', compact('pintura', 'artistas'));
    }

    function listar() {
      $model = new Pintura();
      $pinturas = $model->read();

      $this->view('listagemPintura', compact('pinturas'));
    }

    function novo() {
      $pintura = array();
      $pintura['id'] = 0;
      $pintura['nome'] = "";
      $pintura['tecnica'] = "";
      $pintura['ano_lancamento'] = "";
      $pintura['url_imagem'] = "";
      $pintura['id_artista'] = 0;

      $modelArtista = new Artista();
      $artistas = $modelArtista->read();

      $this->view('frmPintura', compact('pintura', 'artistas'));
    }

    function salvar() {
      $pintura = array();
      $pintura['id'] = $_POST['id'];
      $pintura['nome'] = $_POST['nome'];
      $pintura['tecnica'] = $_POST['tecnica'];
      $pintura['ano_lancamento'] = $_POST['ano_lancamento'];
      $pintura['url_imagem'] = $_POST['url_imagem'];
      $pintura['id_artista'] = $_POST['id_artista'];

      $model = new Pintura();

      if ($pintura['id'] == 0) {
        $model->create($pintura);
      } else {
        $model->update($pintura);
      }

      $this->redirect("pintura/listar");
    }

    function excluir($id) {
      $model = new Pintura();
      $model->delete($id);
      $this->redirect("pintura/listar");
    }
  }
 ?>
