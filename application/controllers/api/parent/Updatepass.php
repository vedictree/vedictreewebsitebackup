<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Updatepass extends REST_Controller 
{



 public function index_post()
{
	
        
        $p_mobile      = $this->input->post('p_mobile');
        $p_password    = $this->input->post('newpass');
        $confirmpass   = $this->input->post('confirmpass');
        if($p_mobile==""){
            $data = array('msg' => "Mobile required",'code'=>404);
        }else if($p_password==""){
            $data = array('msg' => "Password required",'code'=>404);
        }else if($p_password!=$confirmpass){
            $data = array('msg' => "Password is not matched ",'code'=>404);
        }else{
            $res = $this->apimodel->update_parent_password($p_mobile,$p_password);
            if($res==1){
                $data = array('msg' => "Password Updated",'res'=>$res,'code'=>200);
            }else{
                
            $data = array('msg' => "Not updated",'res'=>$res,'code'=>404);
            }
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}


}

?>