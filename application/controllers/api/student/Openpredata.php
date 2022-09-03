<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Openpredata extends REST_Controller 
{


 public function index_post()
  {
    
	  $studId = $this->input->post('studId');
	  $unlockdayId = $this->input->post('unlockdayId');
	  $unlock_monthId = $this->input->post('unlock_monthId');
	  if($studId==""){
         $data['error'] = array('error' => "studId required",'code'=>404);
        
        }else if($unlockdayId==""){
            
         $data['error'] = array('error' => "unlockdayId required",'code'=>404);
        
        }else if($unlock_monthId==""){
            
         $data['error'] = array('error' => "unlock_monthId required",'code'=>404);
        
        }else{
            
        	  $userinfo = $this->regModel->openpredata($studId,$unlockdayId,$unlock_monthId);
        	  if($userinfo==1) {
        	        $data = array('msg' => "Month and Day updated successfully ",'code'=>200,);
        	  } else {
        	      $data = array('msg' => "Month and Day not updated Succeessfully",'code'=>404); 
        	  }
        }
        
    $this->response($data, REST_Controller::HTTP_OK);
}





}
?>