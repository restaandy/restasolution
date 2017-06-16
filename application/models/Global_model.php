<?php

class Global_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }
    function get_kategori_download(){
        $data=$this->db->get("download_kategori");
        return $data;
    }
}
