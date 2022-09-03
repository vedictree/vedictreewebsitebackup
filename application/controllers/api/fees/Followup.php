<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Followup extends REST_Controller 
{



 public function index_post()
{
	
        
        $fk_userId   = $this->input->post('fk_userId');
        $remark      = $this->input->post('remark');
        $fk_adminId  = $this->input->post('fk_adminId');
       if($fk_userId==""){
            $data = array('msg' => "fk_userId required",'code'=>404);
        }else if($remark==""){
            $data = array('msg' => "remark required",'code'=>404);
        }else if($fk_adminId==""){
            $data = array('msg' => " fk_adminId required",'code'=>404);
        }else{
            
            $res  = $this->apimodel->add_followup($fk_userId,$remark,$fk_adminId);
            if($res==1){
                $data = array('msg' => "Add Followup data",'res'=>$res,'code'=>200);
            }else{
                
            $data = array('msg' => "Not Added",'res'=>$res,'code'=>404);
            }
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
}

function getfollowup_post()
{
      $fk_userId   = $this->input->post('fk_userId');
       if($fk_userId==""){
            $data = array('msg' => "fk_userId required",'code'=>404);
        }else
        {
            $res  = $this->apimodel->getfollowup($fk_userId);
            if($res){
                $data = array('msg' => "data fetched",'res'=>$res,'code'=>200);
            }else{
                
            $data = array('msg' => "Not Added",'res'=>$res,'code'=>404);
            }
        }
         $this->response($data, REST_Controller::HTTP_OK);
            
    }
      



}

?>