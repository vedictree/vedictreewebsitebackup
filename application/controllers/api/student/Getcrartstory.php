<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Getcrartstory extends REST_Controller 
{


 public function index_post(){
		
		$flag     = $this->input->post('flagId');
		if($flag==""){
		    $data = array('msg' => "flagId is required",'code'=>404);
		}else{
            $res    = $this->regModel->getsortycrftfilter($flag);
            if (!empty($res)) {
                  $data = array('msg' => "Data fetch successfully",'res'=>$res,'code'=>200); 
            }else{
                   $data = array('msg' => "Data do not fetch successfully",'res'=>$res,'code'=>404); 
            }
		}

        $this->response($data, REST_Controller::HTTP_OK);
	}
	
	
 
	







}

?>