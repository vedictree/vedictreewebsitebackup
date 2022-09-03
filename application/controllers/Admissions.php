<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admissions extends CI_Controller {
    public function index()
    {
         $data['events']     =  $this->regModel->getEvents();
        $this->load->view('admissions',$data);
    }
}
?>