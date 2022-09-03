<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Pendingfees extends REST_Controller 
{



 public function index_post()
{
	
       
            $res  = $this->apimodel->pendingfees();
    
    	    if(!empty($res)){
    
    	          $data = array('msg' => "Pending fees found !",'res'=>$res,'code'=>200); 
    	          
    	    } else {
    	          
    	          $data = array('msg' => "No Data found",'res'=>$res,'code'=>404);
    	    }
        

     
        $this->response($data, REST_Controller::HTTP_OK);
}


}

?>