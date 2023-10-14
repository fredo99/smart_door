<?php
class m_login extends CI_Model

{
	function auth($id, $password)
	{
		$query = $this->db->query("SELECT * FROM user WHERE id='$id' AND password='$password' LIMIT 1");
		return $query;
    }
}
