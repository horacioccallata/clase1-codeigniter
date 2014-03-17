<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador2 extends CI_Controller
{
	function index()
	{
		$this->load->view('vista');
	}
		function formulario()
	{
		$data=array('nombre' =>'juan' ,"apellido"=>'peres');
		$this->load->view("cargar_vista", $data);
	}
}