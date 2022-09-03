<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Register extends REST_Controller 
{



 public function index_post()
{
	
        $p_name = $this->input->post('p_name');
        $p_mobile  = $this->input->post('p_mobile');
        $p_email  = $this->input->post('p_email');
        $p_password  = $this->input->post('p_password');
        if($p_name==""){
            $data = array('msg' => "Parent Name required",'res'=>$res,'code'=>404);
            
        }else if($p_mobile==""){
            $data = array('msg' => "Mobile required",'res'=>$res,'code'=>404);
        }else if($p_email==""){
            $data = array('msg' => "Email required",'res'=>$res,'code'=>404);
        }else if($p_password==""){
            $data = array('msg' => "Password required",'res'=>$res,'code'=>404);
        }else{


            $check_paranet_exists = $this->apimodel->check_paranet_exists($p_mobile,$p_email);
            if(!empty($check_paranet_exists)){
                $data = array('msg' => "Already Exist",'res'=>$check_paranet_exists,'code'=>404);
            }else{
                $res  = $this->apimodel->regsiter_parent($p_mobile,$p_name,$p_email,$p_password);
        
                if($res==1){
        
                    $data = array('msg' => "Parent Register Successfully !",'res'=>$res,'code'=>200); 
                    
                } else {
                    
                    $data = array('msg' => "Not Registerd",'res'=>$res,'code'=>404);
                }
            }
        }

     
        $this->response($data, REST_Controller::HTTP_OK);
	}


}

?>