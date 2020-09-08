<?php
	echo 'Hola Mundo!<br>';

	//declaración de clases
	class Cuenta{
		
		//atributos
		public $nro;
		public $moneda;
		public $saldo;
		
		//método constructor
		public function Cuenta($nro,$moneda){
			$this->nro=$nro;
			$this->moneda=$moneda;
		}
		
		//métodos
		public function depositar($monto){
			$this->saldo+=$monto;
		}
		
		public function debitar($monto){
			if($monto<=$this->saldo){
				$this->saldo-=$monto;
			}else{
				echo "No hay saldo suficiente!<br>";
			}
		}
		
		public function getEstado(){
			return $this->nro.' '.$this->moneda.' '.$this->saldo;
		}
		
	}//end class

	echo '-- cuenta1 --<br>';
	$cuenta1=new Cuenta(1,'arg$');
	$cuenta1->depositar(80000);
	$cuenta1->depositar(40000);
	$cuenta1->debitar(15000);
	echo $cuenta1->getEstado().'<br>';

	class Cliente{
		public $nro;
		public $nombre;
		public $cuenta;
		
		public function Cliente($nro,$nombre,$nroCuenta){
			$this->nro=$nro;
			$this->nombre=$nombre;
			$this->cuenta=new Cuenta($nroCuenta,'arg$');
		}
		
		public function getCuenta(){
			return $this->cuenta;
		}
		
		public function getEstado(){
			return $this->nro.' '.$this->nombre;
		}
		
	}//end class

	echo '-- cliente1 --<br>';
	$cliente1=new Cliente(1,'Fernando Lopez',2);
	
	//$cliente1->depositar(40000);
	
	//$cuentax=$cliente1->getCuenta();
	//$cuentax->depositar(40000);
	
	$cliente1->getCuenta()->depositar(40000);
	
	echo $cliente1->getEstado().'<br>';
	echo $cliente1->getCuenta()->getEstado().'<br>';
	
	

?>
