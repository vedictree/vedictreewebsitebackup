<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Login extends REST_Controller 
{



 public function index_post()
{
	
        
        $studentMobile   = $this->input->post('studentMobile');
        $studentPass      = $this->input->post('studentPass');
      
       if($studentMobile==""){
            $data = array('msg' => "studentMobile required",'code'=>404);
        }else if($studentPass==""){
            $data = array('msg' => "studentPass required",'code'=>404);
        }else{
            
            $res  = $this->apimodel->get_admin_data($studentMobile,$studentPass);
            if($res){
                $data = array('msg' => "login successful",'res'=>$res,'code'=>200);
            }else{
                
            $data = array('msg' => "Not found",'res'=>$res,'code'=>404);
            }
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
}


      



}

?>