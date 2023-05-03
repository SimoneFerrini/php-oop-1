<?php 
    class Movie{
        public $title;
        public $releaseDate;
        public $genre;
        public $actors;


        function __construct(string $title, string $releaseDate, string $genre, string $actors){
            $this->title = $title;
            $this->releaseDate = $releaseDate;
            $this->genre = $genre;
            $this->actors = $actors;
        }

        public function getTitle(){
            return $this->title;
        }
    }
?>