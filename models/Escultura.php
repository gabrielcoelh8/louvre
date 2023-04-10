<?php
  class Escultura extends Model {
    protected $tabela="escultura";
    protected $query = "SELECT escultura.*, artista.nome AS artista_nome FROM escultura JOIN artista ON artista.id = escultura.id_artista ORDER BY id_artista";
    protected $ordem="id_artista";
  }
 ?>
