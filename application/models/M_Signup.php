<?php
class M_signup extends CI_Model
{

	public function __construct()
    {
        parent::__construct();
    }

	function check_id($id)
	{
		$query = $this->db->query("SELECT * FROM user WHERE id='$id' LIMIT 1");
		return $query;
    }
    
    function add_user($name, $id, $password)
	{
		$this->db->query("INSERT INTO user (id, password)
        VALUES ('$id', '$password')");
	}

}