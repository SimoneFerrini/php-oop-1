<?php 
    class Movie{
        public $title;
        public $releaseYear;
        public $genre;
        public $actors;


        function __construct(string $title, string $releaseYear, string $genre, string $actors){
            $this->title = $title;
            $this->releaseYear = $releaseYear;
            $this->genre = $genre;
            $this->actors = $actors;
        }

        public function getTitle(){
            return $this->title;
        }
    }
?>