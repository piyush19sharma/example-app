<?php
class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }

    public function getTempo() {
        return $this->tempo;
    }
}

$song = new Song();
$song->setTitle("Bohemian Rhapsody");
$song->setArtist("Queen");
$song->setGenre("Rock");
$song->setTempo("70 BPM");

echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";
?>
