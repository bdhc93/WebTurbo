<?php

include_once 'models/ranking.php';

class RankingAdmModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos){
//        echo $_POST['contador'];
        try {
            $query = $this->db->connect()->prepare('INSERT INTO RANKING (EMPRESA, TITULO, ARTISTA, CONTADOR, URL, UBICACION) VALUES (:empresa, :titulo, :artista, :contador, :url, :ubicacion)');
            $query->execute(['empresa' => $datos['empresa'], 'titulo' => $datos['titulo'], 'artista' => $datos['artista'], 'contador' => $datos['contador'], 'url' => $datos['url'], 'ubicacion' => $datos['ubicacion']]);
            return true;
        }catch (PDOException $e){
//            echo $e->getMessage();
            return false;
        }
    }

    public function getFM(){
        $items = [];

        try {

            $query = $this->db->connect()->query("SELECT*FROM ranking WHERE empresa='FM' ORDER BY `ubicacion`");

            while ($row = $query->fetch()){
                $item = new MRanking();
                $item->titulo = $row['titulo'];
                $item->artista = $row['artista'];
                $item->contador = $row['contador'];
                $item->url = $row['url'];
                $item->ubicacion = $row['ubicacion'];
                $item->id = $row['Id'];

                array_push($items, $item);
            }

            return $items;

        }catch (PDOException $e){
            return [];
        }
    }

    public function getTV(){
        $items = [];

        try {

            $query = $this->db->connect()->query("SELECT*FROM ranking WHERE empresa='TV'");

            while ($row = $query->fetch()){
                $item = new MRanking();
                $item->titulo = $row['titulo'];
                $item->artista = $row['artista'];
                $item->fecha = $row['fecha'];
                $item->url = $row['url'];
                $item->ubicacion = $row['ubicacion'];
                $item->id = $row['Id'];

                array_push($items, $item);
            }

            return $items;

        }catch (PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new MRanking();

        $query = $this->db->connect()->prepare("SELECT * FROM ranking WHERE Id = :Id");

        try {
            $query->execute(['Id' => $id]);

            while ($row = $query->fetch()){
                $item->empresa = $row['empresa'];
                $item->titulo = $row['titulo'];
                $item->artista = $row['artista'];
                $item->fecha = $row['fecha'];
                $item->url = $row['url'];
                $item->ubicacion = $row['ubicacion'];
                $item->id = $row['Id'];
            }
            return $item;
        }catch (PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE ranking SET empresa = :empresa, titulo = :titulo, artista = :artista, fecha = :fecha, url = :url, ubicacion = :ubicacion WHERE Id = :id");

        try {
            $query->execute([
                'id' => $item['id'],
                'empresa' => $item['empresa'],
                'titulo' => $item['titulo'],
                'artista' => $item['artista'],
                'fecha' => $item['fecha'],
                'url' => $item['url'],
                'ubicacion' => $item['ubicacion']]);

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function delete($Id){
        $query = $this->db->connect()->prepare("DELETE FROM ranking WHERE Id = :id");
        try {
            $query->execute(['id' => $Id]);

            return true;
        }catch (PDOException $e){
            return false;
        }
    }
}