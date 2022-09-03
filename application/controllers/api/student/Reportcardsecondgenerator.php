<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require(APPPATH.'/libraries/REST_Controller.php');

class Reportcardsecondgenerator extends REST_Controller
{
	
	public function index_post()
	{
	   
    $studId = $this->input->post('studId');
    $payment_url = "";
    
    if($studId==""){
        $data = array('msg' => "studId required ",'code'=>404);
     }else{
        
             
            $check_student_exist  = $this->regModel->get_reportcardDetail_second($studId); 
            if($check_student_exist) {
                  $payment_url = base_url("website/finalreport_card_second_app/".$studId);
                  $data = array('msg' => "Data Fetch Succeessfully ",'code'=>200,'payment_url'=> $payment_url );
            } else {
                $data = array('msg' => "Data not Fetch Succeessfully",'code'=>404,'payment_url'=> $payment_url ); 
            }
    
      }
     $this->response($data, REST_Controller::HTTP_OK);

	}
	

}

?>