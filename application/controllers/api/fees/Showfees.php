<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Showfees extends REST_Controller 
{

     public function index_get()
    {
    
            $res  = $this->regModel->getphysicalfees();
            if(!empty($res)){
                $data = array('msg' => " Fees list",'res'=>$res,'code'=>200);
            }else{
                
                $data = array('msg' => "Not found",'res'=>$res,'code'=>404);
            }
        $this->response($data, REST_Controller::HTTP_OK);    
    
    }
}
?>