<?php
require './src/ClassArtist.php';

use PHPUnit\Framework\TestCase;
final class RegisterArtistTest extends TestCase
{
    public function testRegisterArtist(){
        $values = array(
            "Enanitos Verdes", 
            "Argentina",  
            "Luz de dia", 
            "20159");

        $artist = new Artist();
        $newArtist = $artist->AddArtist($values);

        $this -> assertEquals("ok",$newArtist);
        $this -> assertTrue("ok" == $newArtist);
        $this -> assertFalse("ok" != $newArtist);
        $this -> assertCount(3,$values);
    }
}