<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicamentos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Medicamentos_model");
	}

	
	public function index()
	{
		$data  = array(
			'medicamentos' => $this->Medicamentos_model->getMedicamentos(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/medicamentos/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/medicamentos/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombregenerico = $this->input->post("nombregenerico");
		$concentracion = $this->input->post("concentracion");
		$forma = $this->input->post("forma");
		$via= $this->input->post("via");
		$fechacaducidad = $this->input->post("fechacaducidad");
		$stock = $this->input->post("stock");

		$data  = array(
			'nombregenerico' => $nombregenerico, 
			'concentracion' => $concentracion,
			'forma ' => $forma ,
			'via ' => $via ,
			'fechacaducidad ' => $fechacaducidad ,
			'stock ' => $stock 

			
		);

		if ($this->Medicamentos_model->save($data)) {
			redirect(base_url()."mantenimiento/medicamentos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/medicamentos/add");
		}
	}

	public function edit($id){
		$data  = array(
			'categoria' => $this->Medicamentos_model->getMedicamento($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/medicamentos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idMedicamento = $this->input->post("idMedicamento");
		$nombregenerico = $this->input->post("nombregenerico");
		$concentracion = $this->input->post("concentracion");
		$forma = $this->input->post("forma");
		$via = $this->input->post("via");
		$fechacaducidad = $this->input->post("fechacaducidad");
		$stock = $this->input->post("stock");

		$data = array(
			'nombregenerico' => $nombregenerico, 
			'concentracion' => $concentracion,
			'forma' => $forma,
			'via' => $via,
			'fechacaducidad' => $fechacaducidad,
			'stock' => $stoock

		);

		if ($this->Medicamentos_model->update($idMedicamento,$data)) {
			redirect(base_url()."mantenimiento/medicamentos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/medicamentos/edit/".$idCategoria);
		}
	}

	public function view($id){
		$data  = array(
			'categoria' => $this->Medicamentos_model->getMedicamento($id), 
		);
		$this->load->view("admin/medicamentos/view",$data);
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Medicamentos_model->update($id,$data);
		echo "mantenimiento/medicamentos";
	}
}
