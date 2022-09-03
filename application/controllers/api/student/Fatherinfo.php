<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Fatherinfo extends REST_Controller 
{


 public function index_post()
  {
    
	  $studId = $this->input->post('studId');
	  if($studId==""){
         $data['error'] = array('error' => "studId required ",'code'=>404);
         $this->response($data, REST_Controller::HTTP_OK);

        }else{
            
        	 $userinfo_father = $this->regModel->userinfo_father($studId);
        	  if(!empty($userinfo_father)) {
        	        $data = array('msg' => "Data Fetch Succeessfully ",'code'=>200,'userinfo'=>$userinfo_father);
        	  } else {
        	      $data = array('msg' => "Data not Fetch Succeessfully",'code'=>404,'userinfo'=>$userinfo_father); 
        	  }
              
              $this->response($data, REST_Controller::HTTP_OK);
        }

}





}
?>