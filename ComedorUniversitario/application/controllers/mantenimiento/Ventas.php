<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Ventas_model");
		$this->load->model("Medicamentos_model");
	}

	public function index()
	{
		$data  = array(
			'productos' => $this->Ventas_model->getVentas(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ventas/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){
		$data =array( 
			"ventas" => $this->Ventas_model->getVentas()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ventas/add",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$medicamento = $this->input->post("medicamento");
		$fechaventa = $this->input->post("fechaventa");
		$cliente = $this->input->post("cliente");
		$cantidad = $this->input->post("cantidad");
		$preciounitario = $this->input->post("preciounitario");
		$total = $this->input->post("total");

		$data  = array(
			'idmedicamento' => $medicamento,
			'fechaventa' => $fechaventa, 
			'cliente' => $cliente,
			'cantidad' => $cantidad,
			'preciounitario' => $preciounitario,
			'total' => $total
			
		);

		if ($this->Ventas_model->save($data)) {
			redirect(base_url()."mantenimiento/ventas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/ventas/add");
		}
	}

	public function edit($id){
		$data =array( 
			"venta" => $this->Ventas_model->getVenta($id),
			"medicamentos" => $this->Medicamentos_model->getMedicamentos()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ventas/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idventa = $this->input->post("idventa");
		$medicamento = $this->input->post("medicamento");
		$fechaventa = $this->input->post("fechaventa");
		$cliente = $this->input->post("cliente");
		$cantidad = $this->input->post("cantidad");
		$preciounitario = $this->input->post("preciounitario");
		$total = $this->input->post("total");
		$data  = array(
			'idmedicamento' => $medicamento, 
			'fechaventa' => $fechaventa,
			'cliente' => $cliente,
			'cantidad' => $cantidad,
			'preciounitario' => $preciounitario,
			'total' => $total
		);
		if ($this->Ventas_model->update($idventa,$data)) {
			redirect(base_url()."mantenimiento/ventas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/ventas/edit/".$idventa);
		}
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Ventas_model->update($id,$data);
		echo "mantenimiento/ventas";
	}

}