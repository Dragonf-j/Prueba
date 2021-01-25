<?php
class empleados {
 
    private $datos;
    
    public function __construct()
    {
        $this->datos =[];
        /*$dat=array('12345678Z'=>array('Anotonio',32,'programador',5,3000));
        foreach ($dat as $key=>$dato){
            $dat1 = new empleado($key ,$dato[0],$dato[1],$dato[2],$dato[3],$dato[4]);
            array_push($this->datos,$dat1);
        }*/
    }

    public function setdatos($dato){
        $this->datos=$dato;
    }

    public function getDatos(){
       return $this->datos ;
    }
    

    public function anadir($datos){
         $e =$this->buscaremp($datos->getDni());
        if($e==-1){ 
            array_push($this->dato, $datos);
        }else{
            return 'Ya existe ese usuario';
        }     
    }
        
    
    public function buscaremp($dni){
        $result = -1;
        foreach ($this->datos as $k=>$datos) {
                if ($datos->getDni == $dni)
                {
                    $result = $k;
                    break;
                }
            }
        return $result;

    }

    
    public function borrar($datos,$dni){
        foreach($datos as $dniN){
                if ($dni==$dniN) { 
                    unset($datos);
                }else{
                    echo 'no existe empleado';
                }
        }
        return $datos;
    }

    public function actualizar($datos, $dni, $dato){
        foreach($this->datos as $dniN){
            if ($dni==$dniN) { 
                $datos[$dni] = $dato;
            }else{
                echo 'No existe ese usuario';
            }
        }
        return $datos;
    }


    
} 
$dat;
$emp = new empleados();
if(isset($_REQUEST['anadir'])){
    $dat= $emp -> anadir($datos);  
 }


?>