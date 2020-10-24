<?php

include_once 'models/nosotros.php';

class NosotrosModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getMisionVision($vista){
        $item = new MNosotros();

        $query = $this->db->connect()->prepare("SELECT*FROM data_web WHERE vista = :vista");

        try {
            $query->execute(['vista' => $vista]);

            while ($row = $query->fetch()){
                $item->id = $row['Id'];
                $item->vista = $row['vista'];
                $item->titulo_1 = $row['titulo_1'];
                $item->descripcion_1 = $row['descripcion_1'];
                $item->descripcion_1_2 = $row['descripcion_1_2'];
                $item->icono_1 = $row['icono_1'];
                $item->titulo_2 = $row['titulo_2'];
                $item->descripcion_2 = $row['descripcion_2'];
                $item->descripcion_2_2 = $row['descripcion_2_2'];
                $item->icono_2 = $row['icono_2'];
                $item->titulo_3 = $row['titulo_3'];
                $item->descripcion_3 = $row['descripcion_3'];
                $item->descripcion_3_2 = $row['descripcion_3_2'];
                $item->icono_3 = $row['icono_3'];
                $item->titulo_4 = $row['titulo_4'];
                $item->descripcion_4 = $row['descripcion_4'];
                $item->descripcion_4_2 = $row['descripcion_4_2'];
                $item->icono_4 = $row['icono_4'];
            }
            return $item;
        }catch (PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE data_web SET titulo_1 = :titulo_1, descripcion_1 = :descripcion_1, descripcion_1_2 = :descripcion_1_2, icono_1 = :icono_1, titulo_2 = :titulo_2, descripcion_2 = :descripcion_2, descripcion_2_2 = :descripcion_2_2, icono_2 = :icono_2, titulo_3 = :titulo_3, descripcion_3 = :descripcion_3, descripcion_3_2 = :descripcion_3_2, icono_3 = :icono_3, titulo_4 = :titulo_4, descripcion_4 = :descripcion_4, descripcion_4_2 = :descripcion_4_2, icono_4 = :icono_4 WHERE Id = :id");

        try {
            $query->execute(['id' => $item['id'],
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
                'icono_4' => $item['icono_4']]);

            return true;
        }catch (PDOException $e){
            echo $e;
        }
    }
}