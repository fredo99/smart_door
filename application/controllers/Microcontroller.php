<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Microcontroller extends CI_Controller {

    public function add_capacity()
    {   
        $this->load->model('m_capacity');

        $last_id = $this->m_capacity->getCapacity()->row_array();
        $id = $last_id['id_capacity'];
        
        //update capacity
        $this->m_capacity->addCapacityIn($id);
    }

    public function min_capacity()
    {   
        $this->load->model('m_capacity');


        $last_id = $this->m_capacity->getCapacity()->row_array();
        $id = $last_id['id_capacity'];
        
        //update capacity
        $this->m_capacity->addCapacityOut($id);
    }
}
