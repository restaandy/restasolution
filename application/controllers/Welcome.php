<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$var['gcrud']=1;
		$this->load->library('grocery_CRUD');    
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('users');
		$crud->unset_jquery();
		$crud->unset_jquery_ui();
		$crud->unset_bootstrap(); 
		$output = $crud->render();
		//print_r($output);
		$var['output']=array("css_files"=>$output->css_files,"js_files"=>$output->js_files,"output"=>$output->output);
		$this->load->view('main',$var);
	}
}
