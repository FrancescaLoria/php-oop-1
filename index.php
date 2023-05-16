
<?php

class Movie {
    public $title;
    public $year;
    public $director;

    function __construct($_title) {
        $this->title = $_title;
    }

}

$newMovie = new Movie("La città incantata");

echo $newMovie->title;

?>