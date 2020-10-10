<?php

include_once 'models/rankingext.php';

class RankingextModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getRanking($etiqueta){
        $items = [];
        $query = $this->db->connect()->prepare("SELECT*FROM ranking_ext WHERE etiqueta = :valor1");

        try {
            $query->execute(['valor1' => $etiqueta]);

            while ($row = $query->fetch()){
                $item = new MRankingext();
                $item->id = $row['Id'];
                $item->nombre = $row['nombre'];
                $item->artista = $row['artista'];
                $item->fecha = $row['fecha'];
                $item->url = $row['url'];
                $item->imagen = $row['imagen'];
                $item->etiqueta = $row['etiqueta'];

                array_push($items, $item);
            }

            return $items;
        }catch (PDOException $e){
            return null;
        }
    }

    public function insert($datos){
        try {
            $query = $this->db->connect()->prepare('INSERT INTO RANKING_EXT (NOMBRE, ARTISTA, FECHA, URL, IMAGEN, ETIQUETA) VALUES (:nombre, :artista, :fecha, :url, :imagen, :etiqueta)');
            $query->execute(['nombre' => $datos['nombre'], 'artista' => $datos['artista'], 'fecha' => $datos['fecha'], 'url' => $datos['url'], 'imagen' => $datos['imagen'], 'etiqueta' => $datos['etiqueta']]);
            return true;
        }catch (PDOException $e){
//            echo $e->getMessage();
            return false;
        }
    }

    public function update($item){
//        $query = $this->db->connect()->prepare("UPDATE data_web SET titulo_1 = :titulo_1, descripcion_1 = :descripcion_1, descripcion_1_2 = :descripcion_1_2, icono_1 = :icono_1, titulo_2 = :titulo_2, descripcion_2 = :descripcion_2, descripcion_2_2 = :descripcion_2_2, icono_2 = :icono_2, titulo_3 = :titulo_3, descripcion_3 = :descripcion_3, descripcion_3_2 = :descripcion_3_2, icono_3 = :icono_3, titulo_4 = :titulo_4, descripcion_4 = :descripcion_4, descripcion_4_2 = :descripcion_4_2, icono_4 = :icono_4 WHERE Id = :id");

        try {
            /*$query->execute(['id' => $item['id'],
                'titulo_1' => $item['titulo_1'],
                'descripcion_1' => $item['descripcion_1'],
                'descripcion_1_2' => $item['descripcion_1_2'],
                'icono_1' => $item['icono_1'],
                'titulo_2' => $item['titulo_2'],
                'descripcion_2' => $item['descripcion_2'],
                'descripcion_2_2' => $item['descripcion_2_2'],
                'icono_2' => $item['icono_2'],
                'titulo_3' => $item['titulo_3'],
                'descripcion_3' => $item['descripcion_3'],
                'descripcion_3_2' => $item['descripcion_3_2'],
                'icono_3' => $item['icono_3'],
                'titulo_4' => $item['titulo_4'],
                'descripcion_4' => $item['descripcion_4'],
                'descripcion_4_2' => $item['descripcion_4_2'],
                'icono_4' => $item['icono_4']]);*/

            return true;
        }catch (PDOException $e){
            echo $e;
        }
    }

    public function delete($Id){
        $query = $this->db->connect()->prepare("DELETE FROM RANKING_EXT WHERE Id = :id");
        try {
            $query->execute(['id' => $Id]);

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function getById($id){
        $item = new MRankingext();

        $query = $this->db->connect()->prepare("SELECT * FROM RANKING_EXT WHERE Id = :Id");

        try {
            $query->execute(['Id' => $id]);

            while ($row = $query->fetch()){
                $item->id = $row['Id'];
                $item->nombre = $row['nombre'];
                $item->artista = $row['artista'];
                $item->fecha = $row['fecha'];
                $item->url = $row['url'];
                $item->imagen = $row['imagen'];
                $item->etiqueta = $row['etiqueta'];
            }
            return $item;
        }catch (PDOException $e){
            return null;
        }
    }
}