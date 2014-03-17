<?php
class Hola extends CI_Controller
{
	function index()
	{
		echo "hola mundo";
	}
	function saludo()
	{
		echo "clase1";
	}
	function saludo2()
	{
		echo "saludo2";
	}
	function saludo1($id=0, $nombre="horacio", $edad=23)
	{
		switch ($id) {
			case 0:
				echo "saludo 0".$nombre.$edad;
				break;
			case 1:
				echo "saludo1";
				break;
			case 2:
				echo "saludo2";

			default:
				# code...
				echo "no es";
				break;

		}
	}
	function argumentos($nombre="horacio", $edad=23)
	{
		echo "hola",$nombre,"tienes esta edad",$edad;
	}
	private function argumentos2($nombre2='horacio')
	{
		# code	}
		echo "hola";

	}
	function _calcular($anio)
	{
		$edad=2014-$anio;
		return $edad;
	}
	function edad($anio=123)
	{
		echo "tu edad es ".$this->_calcular($anio);
	}
}

?>