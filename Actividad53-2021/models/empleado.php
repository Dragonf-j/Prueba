<?php
class empleado{
        protected $dni;
        protected $nombre;
        protected $edad;
        protected $puesto;
        protected $antiguedad;
        protected $salarioBruto;
 
        /**
         * Constructor de la clase
         */
        public function __construct( $dni, $nombre, $edad, $puesto, $antiguedad, $salarioBruto)
        
        {
           
            $this->dni = $dni;
            $this->nombre= $nombre;
            $this->edad= $edad;
            $this->puesto = $puesto;
            $this->antiguedad = $antiguedad;
            $this->salarioBruto = $salarioBruto;
        }
         
        /**
         * Metodos get
         */
        public function getDni(){
            return $this->dni;
        }
 
        public function getnombre(){
            return $this->nombre;
        }
 
        public function getEdad(){
            return $this->edad;
        }
 
        public function getpuesto(){
            return $this->puesto;
        }
 
        public function getAntiguedad(){
            return $this->antiguedad;
        }
 
        public function getSalario(){
            return $this->salarioBruto;
        }
 
 
        /**
         * Metodos set
         */
        public function setDni($dni){
            $this->dni= $dni;
        }
 
        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
 
        public function setEdad($edad){
            $this->edad= $edad;
        }
        
 
        public function setPuesto($puesto){
            $this->puesto= $puesto;
        }
 
        public function setAntiguedad($antiguedad){
            $this->antiguedad= $antiguedad;
        }
 
        public function setSalario($salarioBruto){
            $this->salarioBruto= $salarioBruto;
        }
 
        
 
        
    }

      
    ?>