<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Login extends REST_Controller 
{



 public function index_post()
{
	
        
        $p_mobile  = $this->input->post('p_mobile');
        $p_password  = $this->input->post('p_password');
       if($p_mobile==""){
            $data = array('msg' => "Mobile required",'res'=>$res,'code'=>404);
        }else if($p_password==""){
            $data = array('msg' => "Password required",'res'=>$res,'code'=>404);
        }else{
            $check_paranet_exists = $this->apimodel->check_paranet_exists_login($p_mobile,$p_password);
            if(!empty($check_paranet_exists)){
                $data = array('msg' => "Parent Login Successfully",'res'=>$check_paranet_exists,'code'=>200);
            }else{
                
            $data = array('msg' => "Not Registerd",'res'=>$check_paranet_exists,'code'=>404);
            }
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}


}

?>