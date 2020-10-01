<?php

include_once 'models/ranking.php';

class RankingAdmModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos){

        try {
            $query = $this->db->connect()->prepare('INSERT INTO RANKING (EMPRESA, TITULO, ARTISTA, FECHA, URL, UBICACION) VALUES (:empresa, :titulo, :artista, :fecha, :url, :ubicacion)');
            $query->execute(['empresa' => $datos['empresa'], 'titulo' => $datos['titulo'], 'artista' => $datos['artista'], 'fecha' => $datos['fecha'], 'url' => $datos['url'], 'ubicacion' => $datos['ubicacion']]);
            return true;
        }catch (PDOException $e){
//            echo $e->getMessage();
            return false;
        }
    }

    public function get(){
        $items = [];

        try {

            $query = $this->db->connect()->query("SELECT*FROM ranking WHERE empresa='FM'");

            while ($row = $query->fetch()){
                $item = new MRanking();
                $item->titulo = $row['titulo'];
                $item->artista = $row['artista'];
                $item->fecha = $row['fecha'];
                $item->url = $row['url'];
                $item->ubicacion = $row['ubicacion'];

                array_push($items, $item);
            }

            return $items;

        }catch (PDOException $e){
            return [];
        }
    }
}