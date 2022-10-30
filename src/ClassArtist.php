<?php

include("conexion.php");

Class Artist
{
    public function addArtist(array $values){
        $c = new conectar();
        $conexion = $c->conexion();

        $artist = $values[0];
        $country = $values[1];
        $soung = $values[2];
        $years = $values[3];

        if(empty($artist)){
            $message = "Artista Vacio";
        }else{
            if(empty($country)){
                $message = "Pais Vacio";
            }
            else{
                if(empty($soung)){
                    $message = "Sound Vacio";
                }else{
                    if(empty($years)){
                        $message = "Year Vacio";
                    }else{
                        $sql = "INSERT INTO t_artistas (artista, pais, cancion, years) 
                            VALUES ('$artist','$country','$soung','$years')" ;
                        $result = mysqli_query($conexion,$sql);
                        if($result){
                            $message = "ok";
                        }else
                        $message = "no ok";
                    }
                }
            }
        }
        return $message;
    }
    
    public function updateArtist(array $values){
        $c = new conectar();
        $conexion = $c->conexion();

        $id = $values[0];
        $artist = $values[1];
        $country = $values[2];
        $soung = $values[3];
        $years = $values[4];

        if(empty($id)){
            $message = "Falta ID";
        }
        else{
            if(empty($artist)){
                $message = "Artista Vacio";
            }else{
                if(empty($country)){
                    $message = "Pais Vacio";
                }
                else{
                    if(empty($soung)){
                        $message = "Sound Vacio";
                    }else{
                        if(empty($years)){
                            $message = "Year Vacio";
                        }else{
                            $sentencia = "UPDATE t_artistas SET 
                                artista='$artist', 
                                pais='$country', 
                                cancion='$soung', 
                                years='$years' where id='$id'";
                            $result = mysqli_query($conexion, $sentencia);
                            if($result){
                                $message = "ok";
                            }else
                                $message = "no ok";
                        }
                    }
                }
            }
        }
        return $message;
    }

    public function deleteArtist($id){
        $c = new conectar();
        $conexion = $c->conexion();

        if(empty($id)){
            $message = "Falta ID";
        }else{
            $sql = "SELECT*FROM t_artistas WHERE id = '$id'";
            $result = mysqli_query($conexion,$sql);
            if(mysqli_num_rows($result) > 0){
                $sqlborrar="DELETE FROM t_artistas WHERE id=$id";
                $resborrar = mysqli_query($conexion,$sqlborrar);
                if($resborrar){
                    $message = "ok";
                    
                }else{
                    $message = "no ok";
                }
            }else{
                $message = "No hay ningun registro con el id = ".$id;
            }
        }
        return $message;
    }
}
?>