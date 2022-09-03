<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Offsession extends REST_Controller 
{


public function index_post(){
        
 
      $studId     = $this->input->post('studId');
      if($studId==""){
          $data = array('msg' => "studId is required",'code'=>404);
      }else{
            $res    = $this->regModel->Offsession($studId);
            if ($res) {
                  $data = array('msg' => "Fetch Data successfully ",'res'=>$res,'code'=>200); 
            }else{
                   $data = array('msg' => "Data Not Found !",'res'=>$res,'code'=>400); 
            }
      }
    
        $this->response($data, REST_Controller::HTTP_OK);
  }





 

   



}

?>