
<?php

class Movie {
    public $title;
    public $year;
    public $director;
    public $genders;

    function __construct($_title,$_director,$_year,$_genders) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genders = $_genders;
    }

    public function generateMovieDetails() {
        $gendersString = "";
        foreach ($this->genders as $gender) {
            $gendersString = $gendersString . $gender . " / ";
        }

        return "Il film " . $this->title . " ha come regista " . $this->director . ", ed è stato realizzato nel " . $this->year ."." . " Il suo genere è " . $gendersString . ".";
               

    }

}

$newMovie = new Movie("La città incantata","Hayao Miyazaki", 2001, ["Animazione", "Avventura", "Fantastico"]);
$newMovie2 = new Movie("Il castello errante di Howl","Hayao Miyazaki", 2004,["Animazione","Fantastico","Sentimentale","Avventura"]);

//echo "Titolo del film: " . $newMovie->title;

$filmDetails = $newMovie->generateMovieDetails();
$filmDetails2 = $newMovie2->generateMovieDetails();

echo $filmDetails;
echo "<br>";
echo $filmDetails2;


?>