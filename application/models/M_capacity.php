<?php
class M_capacity extends CI_Model
{
    function getCapacity(){
        $query = $this->db->query("SELECT * FROM capacity ORDER BY set_time DESC LIMIT 1");
        return $query;
    }

    function addCapacity($capacity, $time)
	{
		$this->db->query("INSERT INTO capacity (capacity, in_capacity, out_capacity, set_time)
        VALUES ($capacity, 0, 0, '$time')");
    }

    function addCapacityIn($id){
        $this->db->query("UPDATE capacity SET in_capacity = in_capacity + 1, total_capacity = total_capacity + 1 WHERE id_capacity ='$id'");
    }

    function addCapacityOut($id){
        $this->db->query("UPDATE capacity SET in_capacity = in_capacity - 1, out_capacity = out_capacity + 1 WHERE id_capacity ='$id'");
    }

}
