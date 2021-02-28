<?php

    require_once DIR_MODEL;

    class ControllerList extends ModelList
    {

        public function __construct(){
            self::result();
        }

        //

        public function convertionCMforM($number){
            $meters = $number / 100;
            if($number < 100){
                return "$number cm";
            }else{
                return "$meters m";
            }
        }

        public function convertionMaleANDFemale($string){
            if($string == "male"){
                return $string = "masculino";
            }else if($string == "female"){
                return $string = "feminino";
            }else{
                return $string = "desconhecido";
            }
        }

        //

        private function findName(){
            return $this->getName();
        }

        private function findHeight(){
            $height = $this->getHeight();
            return self::convertionCMforM($height);
        }

        private function findMass(){
            return $this->getMass();
        }

        private function findGender(){
            $gender = $this->getGender();
            return self::convertionMaleANDFemale($gender);
        }

        private function result(){

            // SET URL
            $this->setUrl("https://swapi.dev/api/people/");
            // GET URL
            $url = $this->getUrl();
            // RESULT
            $result = json_decode(file_get_contents($url));
            
            foreach($result->results as $value) {
                // SET
                $this->setName($value->name);
                $this->setHeight($value->height);
                $this->setMass($value->mass);
                $this->setGender($value->gender);
                $this->setHomeWorld($value->homeworld);
                // GET
                $name = self::findName();
                $height = self::findHeight();
                $mass = self::findMass();
                $gender = self::findGender();
                $homeworld = $this->getHomeWorld();
                // RETURN
                echo "<div class='article'>";
                echo "<h1>$name</h1>";
                echo "<ul>";
                echo "<li><b>Altura:</b> $height</li>";
                echo "<li><b>Peso:</b> $mass Kg</li>";
                echo "<li><b>Sexo:</b> $gender</li>";
                echo "</ul>";
                echo "<a href='#'>Ler mais</a>";
                echo "</div>";
            }

        }

    }