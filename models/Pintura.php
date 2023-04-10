<?php
  class Pintura extends Model {
    protected $tabela="pintura";
    protected $query = "SELECT pintura.*, artista.nome AS artista_nome FROM pintura JOIN artista ON artista.id = pintura.id_artista ORDER BY id_artista";
    protected $ordem="id_artista";
  }
 ?>
