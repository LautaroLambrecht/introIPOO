<?php
    class Matrix{
        private $matrix = [];

        public function __construct($col, $row){
            for ($i = 0; $i < $col; $i++){
                for ($j = 0; $j < $row; $j++){
                    $this->matrix[$i][$j] = 0;
                }
            }
        }
        
        public function getPos($i, $j):int{
            if (count($this->matrix) > $i && count($this->matrix[0]) > $j){
                $valor =  $this->matrix[$i][$j];
            }
            return $valor;
        }

        public function getInfo(){
            var_dump($this->matrix);
        }

        public function getRow(): int{
            $cont = 0;
            for($i = 0; $i < count($this->matrix); $i++){
                $cont++;
            }
            return $cont;

        }

        public function getColumn(): int{
            $colCount = count($this->matrix[0]);
            return $colCount;
        }

        public function setPos($i,$j,$num){
            if (count($this->matrix) > $i && count($this->matrix[0]) > $j){
                $this->matrix[$i][$j] = $num;
            }
        }

        public function setAll($num){
            for ($i = 0; $i < count($this->matrix); $i++){
                for ($j = 0; $j < count($this->matrix[0]); $j++){
                    $this->matrix[$i][$j] = $num;
                }
            }
        }

        public function sumArrays(Matrix $array){
            if ($array->getColumn() == $this->getColumn() && $array->getRow() == $this->getRow()){
                for ($i = 0; $i < count($this->matrix); $i++){
                    for ($j = 0; $j < count($this->matrix[0]); $j++){
                        $this->matrix[$i][$j] += $array->getPos($i,$j);
                    }
                }
            }
            else {
                echo "No se pueden sumar las matrices";
            }
        }

        public function multiplyArray(Matrix $array){
            if ($array->getColumn() == $this->getColumn() && $array->getRow() == $this->getRow()){
                for ($i = 0; $i < count($this->matrix); $i++){
                    for ($j = 0; $j < count($this->matrix[0]); $j++){
                        $this->matrix[$i][$j] *= $array->getPos($i,$j);
                    }
                }
            }
            else {
                echo "No se pueden multiplicar las matrices";
            }
        }
    }

    $matrix = new Matrix(3, 3);
    $matrix1 = new Matrix (3,1);
    $matrix->setAll(1);
    $matrix1->setAll(2);
    $matrix->getInfo();
    $matrix1->getInfo();
    $matrix->sumArrays($matrix1);
    $matrix->getInfo();
?>