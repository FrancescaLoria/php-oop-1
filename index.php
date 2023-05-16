
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

//echo "Titolo del film: " . $newMovie->title;

$filmDetails = $newMovie->generateMovieDetails();

echo $filmDetails;


?>