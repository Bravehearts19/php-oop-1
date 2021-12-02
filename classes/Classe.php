<?php
    class Movie {
        public $title;
        public $poster;
        public $plot;
        public $year;
        public $duration;
        public $genre;
        public $director;
        public $actors;

        /* Constructor */
        function __construct($_title, $_poster, $_plot, $_year, $_duration, $_genre, $_director, $_actors) {
            $this -> setTitle($_title);
            $this -> setPoster($_poster);
            $this -> setPlot($_plot);
            $this -> setYear($_year);
            $this -> setDuration($_duration);
            $this -> setGenre($_genre);
            $this -> setDirector($_director);
            $this -> setActors($_actors);
        }
        
        /* Getters and setters */
        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            $this->title = $title;
            return $this;
        }

        public function getDirector() {
            return $this->director;
        }

        public function setDirector($director) {
            $this->director = $director;
            return $this;
        }

        public function getPlot() {
            return $this->plot;
        }

        public function setPlot($plot) {
            $this->plot = $plot;
            return $this;
        }

        function getYear() {
            return $this->year;
        }

        public function setYear($year) {
            $this->year = $year;
            return $this;
        }

        public function getDuration() {
            return $this->duration;
        }

        public function setDuration($duration) {
            $this->duration = $duration;
            return $this;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function setGenre($genre) {
            $this->genre = $genre;
            return $this;
        }

        public function getActors() {
            return $this->actors;
        }

        public function setActors($actors) {
            $this->actors = $actors;
            return $this;
        }

        public function getPoster() {
            return $this->poster;
        }

        public function setPoster($poster) {
            $this->poster = $poster;
            return $this;
        }
    };
