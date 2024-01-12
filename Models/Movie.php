<?php

class Movie
{
    public $title;
    public $language;
    public $nation;
    public $year;
    public $gener;

    public function __construct($titolo, $lingua, $paese, $anno, $genere)
    {
        $this->title = $titolo;
        $this->language = $lingua;
        $this->nation = $paese;
        $this->year = $anno;
        $this->gener = $genere;
    }

    public function getMovie()
    {
        $result = $this->title . ", " . $this->language . " - " . $this->year . " (" . $this->gener . ")";
        return $result;
    }
}
