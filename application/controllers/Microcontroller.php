<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Microcontroller extends CI_Controller {

    public function add_capacity()
    {   
        $this->load->model('m_capacity');

        $cek = $this->m_capacity->getCapacity()->row_array();
        $id = $cek['id_capacity'];
        $total_visitors = (int)$cek['in_capacity'];
        $capacity = (int)$cek['capacity'];

        // cek apakah sudah melebihi
        if ($total_visitors >= $capacity){
            echo "FULL";
        }else{
            //update capacity
            $this->m_capacity->addCapacityIn($id);
        }
        
    }

    public function min_capacity()
    {   
        $this->load->model('m_capacity');


        $cek = $this->m_capacity->getCapacity()->row_array();
        $id = $cek['id_capacity'];
        
        
        $total_visitors = (int)$cek['in_capacity'];

        if ($total_visitors <= 0){
            echo "KOSONG";
        }else{
            //update capacity
            $this->m_capacity->addCapacityOut($id);
        }
    }
}
