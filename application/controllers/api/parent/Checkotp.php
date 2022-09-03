<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Checkotp extends REST_Controller 
{



 public function index_post()
{
	
        
        $p_mobile  = $this->input->post('p_mobile');
        $otp  = $this->input->post('otp');
       
        if($otp==""){
            $data = array('msg' => "OTP required",'code'=>404);
        
        }else if($p_mobile==""){
            $data = array('msg' => "Mobile required",'code'=>404);
        }else{
            
            $check_paranet_exists_otp = $this->apimodel->check_paranet_exists_otp($otp,$p_mobile);
            if(!empty($check_paranet_exists_otp)){
                $data = array('msg' => "Otp verify",'res'=>$check_paranet_exists_otp,'code'=>200);
            }else{
            
               $data = array('msg' => "Wrong otp ",'res'=>$check_paranet_exists_otp,'code'=>404);
            }
                
             
                $this->response($data, REST_Controller::HTTP_OK);
        	}
}   


}

?>