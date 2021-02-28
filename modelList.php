<?php

    class ModelList
    {

        private $url;
        private $name, $height, $mass, $gender, $homeworld;

        public function setUrl($string){
            $this->url = $string;
        }

        public function getUrl(){
            return $this->url;
        }

        // SET

        public function setName($string){
            $this->name = $string;
        }

        public function setHeight($string){
            $this->height = $string;
        }

        public function setMass($string){
            $this->mass = $string;
        }

        public function setGender($string){
            $this->gender = $string;
        }

        public function setHomeWorld($string){
            $this->homeworld = $string;
        }

        // GET

        public function getName(){
            return $this->name;
        }

        public function getHeight(){
            return $this->height;
        }

        public function getMass(){
            return $this->mass;
        }

        public function getGender(){
            return $this->gender;
        }

        public function getHomeWorld(){
            return $this->homeworld;
        }

    }

    /* $url = "https://swapi.dev/api/people/";

    $result = json_decode(file_get_contents($url));

    foreach($result->results as $value){
        echo "<h1>$value->name</h1>";
        echo "<h2>Informações</h2>";
        $height = ($value->height) / 100;
        $gender = $value->gender;
        if($gender == "male"){
            $gender = "masculino";
        }else if($gender == "female"){
            $gender = "feminino";
        }else{
            $gender = "desconhecido";
        }
        echo "<ul>
        <li><b>Altura: </b>$height m</li>
        <li><b>Peso: </b>$value->mass Kg</li>
        <li><b>Sexo: </b>$gender</li>
        <li><b>Planeta: </b>$value->homeworld</li>
        </ul>";
        echo "<h2>Espécie</h2>";
            foreach ($value->species as $specie) {
                echo "<ul>";
                echo "<li>$specie</li>";
                echo "</ul>";
            }
        echo "<h2>Filmes</h2>";
            foreach ($value->films as $film) {
                echo "<ul>";
                echo "<li>$film</li>";
                echo "</ul>";
            }
        echo "<h2>Veículos</h2>";
            foreach ($value->vehicles as $vehicle) {
                echo "<ul>";
                echo "<li>$vehicle</li>";
                echo "</ul>";
            }
        echo "<h2>Naves estelares</h2>";
            foreach ($value->starships as $starship) {
                echo "<ul>";
                echo "<li>$starship</li>";
                echo "</ul>";
            }
    }*/

    /*echo "<pre>";
    var_dump($result);
    echo "</pre>";*/