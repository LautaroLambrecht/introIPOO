<?php
    class Complex{
        private $imaginaria, $real;

        public function add($num){
            $parteImaginaria = $this->imaginaria + $num;
            $parteReal = $this->real + $num;

            echo "Parte imaginaria: " . $parteImaginaria .". Parte real: ". $parteReal ."<br>";
        }

        public function sustract($num){
            $parteReal = $this->real - $num;
            $parteImaginaria = $this->imaginaria - $num;
            echo "Parte imaginaria: " . $parteImaginaria .". Parte real: ". $parteReal ."<br>";
        }

        public function multiply($num){
            $realPart = $this->real * $num->real - $this->imaginaria * $num->imaginaria;
            $imaginariaPart = $this->real * $num->imaginaria + $this->imaginaria * $num->real;
            echo "Parte imaginaria: " . $imaginariaPart .". Parte real: ". $realPart ."<br>";
        }
    }
?>