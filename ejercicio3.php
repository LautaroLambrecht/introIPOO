<?php
    class Empleado {
        public $nombre, $salario, $horaDia;

        public function __construct(){
            $params = func_get_args();
            $num_params = func_num_args();

            $function_constructor = '__construct'.$num_params;

            if(method_exists($this,$function_constructor)){
                call_user_func_array(array($this,$function_constructor),$params);
            }
        }

        function __construct0(){
            $this->__construct1('Anonimo');
        }
        function __construct1($nombre){
            $this->__construct2($nombre, 0);
        }
        function __construct2($nombre, $salario){
            $this->nombre = $nombre;
            $this->salario = $salario;
            $this->__construct3($nombre, $salario,0); 
        }
        function __construct3($nombre, $salario, $horaDia){
            $this->nombre = $nombre;
            $this->salario = $salario;
            $this->horaDia = $horaDia;
        }


        public function getInfo(){
            echo "Nombre: ".$this->nombre."<br>";
            echo "Salario: ".$this->salario."<br>";
            echo "Horas del dia: ".$this->horaDia."<br>";
        }

        public function AddSal(){
            if ($this->salario > 500){
                $this->salario+=10;
            }
        }

        public function AddWork(){
            if ($this->horaDia < 6){
                $this->salario+= 5;
            }
        }
    }

    $empleado1 = new Empleado();
    $empleado1->getInfo();  
    $empleado1->AddSal();
    $empleado1->AddWork();
    $empleado1->getInfo();
?>