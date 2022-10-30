<?php
require './src/ClassArtist.php';

use PHPUnit\Framework\TestCase;
final class UpdateArtistTest extends TestCase
{
    public function testUpdateArtist(){
        $values = array(
            "8",
            "Enanitos Verdes", 
            "Argentina",  
            "Luz de dia", 
            "2015");

        $artist = new Artist();
        $newArtist = $artist->UpdateArtist($values);

        $this -> assertEquals("no ok",$newArtist);
    }
}