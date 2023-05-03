<?php 
    class Movie{
        public $title;
        public $releaseYear;
        public $genres = [];
        public $actors = [];


        function __construct(string $title, string $releaseYear, array $genres, array $actors){
            $this->title = $title;
            $this->releaseYear = $releaseYear;
            $this->genres = $genres;
            $this->actors = $actors;
        }

        public function getGenres($genres){
            return implode(" , ", $genres);
        }

        public function getActors($actors){
            return implode(" , ", $actors);
        }
    }
?>