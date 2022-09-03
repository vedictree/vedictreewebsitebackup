<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Test extends REST_Controller {
    
    public function index_post(){
        
      
      $data['msg'] = "hello";
       
      
     $this->response($data, REST_Controller::HTTP_OK);
  }
}
?>