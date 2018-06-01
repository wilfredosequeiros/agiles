<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class model_comesales extends CI_Model 
{
	public function ListarComesales()
	{
		$this->db->order_by('id ASC');
		return $this->db->get('comesales')->result();
	}


   /*
	public function ExisteEmail($email){
          $this->db->from('usuarios');
          $this->db->where('EMAIL',$email);
          return $this->db->count_all_results();
     }*/



     /*public function SaveComesales($arrayCliente){*/
     public function SaveComesales($arrayComesal){
     	/*Nos aseguramos si realizamos todo o no*/
     	$this->db->trans_start();
     	$this->db->insert('comesales', $arrayComesal);
     	$this->db->trans_complete();	
     }
	 function BuscarID($id){

		$query = $this->db->where('id',$id);
		$query = $this->db->get('comesales');
		return $query->result();
		
	}
	function edit($data,$id){

		$this->db->where('id',$id);
		$this->db->update('comesales',$data);
		
	}
	function Eliminar($id){

		$this->db->where('id',$id);
		$this->db->delete('comesales');
		
	}
	function MenuCompleto(){
		$this->db->order_by('ORDENAMIENTO ASC');
		return $this->db->get('menu_sistema')->result();
	}
	function MiMenu($id,$id_menu){
		$this->db->from('permisosmenu');
		$this->db->where('id',$id);
		$this->db->where('ID_MENU',$id_menu);
		//$this->db->where('sexo',0);
		return $this->db->count_all_results();
	}
	function DesactivaPermisos($id){
		$this->db->where('id_comensal',$id);
		$success = $this->db->update('permisosmenu',array('ESTATUS' => 1));
	}
	function ExistePermiso($id,$id_menu){
		$this->db->from('permisosmenu');
		$this->db->where('id_comensal',$id);
		$this->db->where('ID_MENU',$id_menu);
		return $this->db->count_all_results();
	}
	function ActualizaPermiso($id,$id_menu){
		$this->db->where('id_comensal',$id);
		$this->db->where('ID_MENU',$id_menu);
		$success = $this->db->update('permisosmenu',array('ESTATUS' => 0));
	}
	function AgregaPermiso($arraypermisos){
		$this->db->trans_start();
     	$this->db->insert('permisosmenu', $arraypermisos);
     	$this->db->trans_complete();
	}
}
?>