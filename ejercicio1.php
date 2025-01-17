<?php
    class Triangle{
        private $l1, $l2, $l3;

        public function __construct($l1, $l2, $l3){
            $this->l1 = $l1;
            $this->l2 = $l2;
            $this->l3 = $l3;
        }
        public function FormulaHeron(){
            $s = ($this->l1 + $this->l2 + $this->l3) / 2;
            echo "El semiperimetro es: ". $s;
            $a = sqrt($s*($s-$this->l1)*($s-$this->l2)*($s-$this->l2));
            echo "El area es:".$a;
        }
    }
?>