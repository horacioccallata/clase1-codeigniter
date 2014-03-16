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
	function saludo1($id=0)
	{
		switch ($id) {
			case 0:
				echo "saludo 0";
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
}

?>