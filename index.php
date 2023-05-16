
<?php

class Movie {
    public $title;
    public $year;
    public $director;

    function __construct($_title,$_director,$_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function generateMovieDetails() {
        return "Il film " . $this->title . " ha come regista " . $this->director . ", ed è stato realizzato nel " . $this->year;
               

    }

}

$newMovie = new Movie("La città incantata","Hayao Miyazaki", 2001);
$newMovie2 = new Movie("Il castello errante di Howl","Hayao Miyazaki", 2004);

//echo "Titolo del film: " . $newMovie->title;

$filmDetails = $newMovie->generateMovieDetails();
$filmDetails2 = $newMovie2->generateMovieDetails();

echo $filmDetails;
echo "<br>";
echo $filmDetails2;


?>