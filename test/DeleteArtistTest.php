<?php
require './src/ClassArtist.php';

use PHPUnit\Framework\TestCase;
final class DeleteArtistTest extends TestCase
{
    public function testDeleteArtist(){
        $id = "";

        $artist = new Artist();
        $deleteArtist = $artist->DeleteArtist($id);

        $this -> assertEquals("Falta ID",$deleteArtist);
    }
}