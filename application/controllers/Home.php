<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct(){
        parent::__construct();  
    }
	public function index()
	{
		$var['module']="dashboard";
		$var['var_module']=array(
			"title"=>"Download"
		);
		$this->load->view('main',$var);
	}
	public function download($kategori=NULL,$subkategori=NULL){
		$var['var_titlepage']=array(
			"tipe"=>1,
			"title"=>"Download",
			"content"=>"sfd sdafsdf sdf asdf  dsfopkl pdkf perkwpoer oikdfpk gnwea"
		);
		$var['module']="download";
		$var['var_module']=array(
			"list_kategori"=>$this->gmodel->get_kategori_download(),
			"kategori"=>$kategori,
			"subkategori"=>$subkategori
		);
		$this->load->view('main',$var);
	}
}
