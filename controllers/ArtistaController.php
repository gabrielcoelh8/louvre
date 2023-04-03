<?php
  class ArtistaController extends Controller {
    function editar($id) {
      $model = new Artista();
      $artista = $model->getById($id);
      //$this->view('frmAutor', compact('artista'));
    }

    function listar() {
      $model = new Artista();
      $artistas = $model->read();
      //$this->view('listagemAutor', compact('artistas'));
    }

    function novo() {
      $artista = array();
      $artista['id'] = 0;
      $artista['nome'] = "";
      $artista['data_nascimento'] = "";
      $artista['url_imagem'] = "";
      //$this->view("frmAutor", compact('artista'));
    }

    function salvar() {
      $artista = array();
      $artista['id'] = $_POST['id'];
      $artista['nome'] = $_POST['nome'];
      $artista['email'] = $_POST['data_nascimento'];
      $artista['email'] = $_POST['url_imagem'];

      $model = new Autor();

      if ($artista['id'] == 0) {
        $model->create($artista);
      } else {
        $model->update($artista);
      }

      $this->redirect("artista/listar");
    }

    function excluir($id) {
      $model = new Artista();
      $model->delete($id);
      $this->redirect('artista/listar');
    }
  }
 ?>
