<?php
require './src/ClassArtist.php';

use PHPUnit\Framework\TestCase;
final class SpotifyTest extends TestCase
{
    public function testSpotify(){
        $salida = "";
        $newartist = new Artist();

        //cumple con todas las condiciones para poder hacer un Registro
        $this -> assertEquals("ok", $newartist->AddArtist(array("Calvin Harris","Los Angeles","I Need Your Love","2013")), 
        $salida = "El Artista fue Registrado Exitosamente");
        echo "\n".$salida;
        //No cumple con todas las condiciones "Falta el nombre de la cancion"
        $this -> assertEquals("Sound Vacio", $newartist->AddArtist(array("Galantis","Suecia","","2015")), 
        $salida = "Error al realizar el Registro");
        echo "\n".$salida;
        //cumple con todas las condiciones para poder actualizar
        $this -> assertEquals("ok", $newartist->updateArtist(array("1","Calvin Harris","Los Angeles","I Need Your Love","2013")), 
        $salida = "El Artista fue Actualizado Exitosamente");
        echo "\n".$salida;
        //No cumple con todas las condiciones "Falta el id del Artista"
        $this -> assertEquals("Falta ID", $newartist->updateArtist(array("","Calvin Harris","Los Angeles","I Need Your Love","2015")), 
        $salida = "Error al realizar la Actualizacion");
        echo "\n".$salida;
        //cumple con todas las condiciones para poder Elimanar
        $this -> assertTrue("ok" == $newartist->deleteArtist(1), 
        $salida = "El Artista fue Eliminado Exitosamente");
        echo "\n".$salida;
        //No cumple con todas las condiciones "Falta el id del Artista que desea Eliminar"
        $this -> assertTrue("Falta ID" == $newartist->deleteArtist(""), 
        $salida = "Error al realizar la Eliminacion");
        echo "\n".$salida;
        //Cumple con todas las condiciones pero no se tiene el registro"
        $this -> assertFalse("Falta ID"== $newartist->deleteArtist("10"), 
        $salida = "Error al realizar la Eliminacion");
        echo "\n".$salida;
    }
}