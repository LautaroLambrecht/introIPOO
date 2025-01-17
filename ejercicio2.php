<?php
    class Average {
        public function calcularAverage($n1, $n2, $n3){
            $suma = $n1 + $n2 + $n3;
            $average = $suma / 3;
            echo "La media es: ".$average;
        }
    }
?>