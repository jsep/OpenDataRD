<?php

class Home_model extends CI_Model{

    function __construct(){
        parent::__construct();

    }

    public function getProvincias(){
            /*$query = $this->db->get('SGC-2010.dbo.Provincias');
            return $query->result();*/
    }
}