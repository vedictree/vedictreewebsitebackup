<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Register extends REST_Controller 
{


 public function index_post()
{
		
          

	$studentName     = $this->input->post('studentName');
    $studentEmail    = $this->input->post('studentEmail');
    $studentGender   = $this->input->post('studentGender');
    $studentClass    = $this->input->post('studentClass');
    $studentMobile   = $this->input->post('studentMobile');
    $studentPass     = $this->input->post('studentPass');
    $promoCode       = $this->input->post('promoCode');
    $onlyapplogin    = $this->input->post('onlyapplogin');

	 if($studentName==""){
        $data = array('msg' => "studentName required ",'code'=>404);
     }else if($studentEmail==""){
        $data = array('msg' => "studentEmail required ",'code'=>404);
     }else if($studentClass==""){
        $data = array('msg' => "studentClass required ",'code'=>404);
     }else if($studentGender==""){
        $data = array('msg' => "studentGender required ",'code'=>404);
     }else if($studentMobile==""){
        $data = array('msg' => "studentMobile required ",'code'=>404);
     }else if($studentPass==""){
        $data = array('msg' => "studentPass required ",'code'=>404);
     }else{
    
    if(!empty($promoCode)){
            $effectiveDate = date("Y-m-d");
            $freemonthDT = date('Y-m-d', strtotime("+1 months", strtotime($effectiveDate)));
     }else{
            $freemonthDT = "";
    }
          
          if(!empty($onlyapplogin)){
              $onlyapplogin = $onlyapplogin;
          }else{
              $onlyapplogin = 0;
          } 
         $otpNumber = rand(1111,9999);
		 $data = array(	
								'studentName' 	=> $studentName , 
								'studentEmail' 	=> $studentEmail , 
								'studentGender' => $studentGender , 
								'studentClass' 	=> $studentClass , 
								'studentMobile' => $studentMobile , 
								'studentPass' 	=> sha1($studentPass),
								'promoCode'     => $promoCode ,
								'promoCodeExp'  => 1,
								'freemonthDT'   => $freemonthDT,
								'OTP' 			=> $otpNumber,
								'mobwebStatus'  => 2,
								'onlyapplogin'  => $onlyapplogin,
				);
				
				$dataarrayapi = array('Childname' => $studentName,'class'=>$studentClass,'mobileno' => $studentMobile,'emailId' =>$studentEmail,'source'=>'');
    			$message = trim("Your OTP for VEDIC TREE KIDS LEARNING APP login is ".$otpNumber." For further details please visit our website www.vedictreeschool.com");
                $htmlContent =  $message;
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $this->email->to($studentEmail);
                $this->email->from('info.vedictree@gmail.com','Vedic Tree School');
                $this->email->subject('OTP for VEDIC TREE KIDS LEARNING APP login');
                $this->email->message($htmlContent);
                $result = $this->email->send();
				 $check_reg_data = $this->regModel->check_reg_data($studentEmail,$studentMobile);
				if($check_reg_data==1){

			          $data = array('msg' => "Student Already Exist With This Number and Email Id !",'res'=>$check_reg_data,'code'=>505); 
			          
			    } else {

			    	  $res = $this->regModel->add_reg($data);
			    	  if($res==1){
		                $data = array('msg' => "OTP sent on your phone number",'res'=>$res,'code'=>200);
		              }else{
		              	 $data = array('msg' => "OTP is not sent on your phone number",'res'=>$res,'code'=>404);
		              }
			              
			    }
			}
		
        $this->response($data, REST_Controller::HTTP_OK);
}



 public function verifyotp_post()
  {
    
	  $studentMobile      = $this->input->post('studentMobile');
	  $otp                = $this->input->post('otp');

	  if($studentMobile==""){
        $data = array('msg' => "studentMobile required ",'code'=>404);
     }else if($otp==""){
        $data = array('msg' => "otp required ",'code'=>404);
     }else{

			  $check_exist_number =  $this->regModel->check_exist_number($studentMobile);
			  if($check_exist_number==1) {
			      $res = $this->regModel->verifyOTP($studentMobile,$otp);
			      if($res==1){
			        $data = array('msg' => "OTP Is Verify Successfully ! ",'code'=>200);
			      } else {
			        $data = array('msg' => "OTP Is not Verify Successfully ! ",'code'=>404);
			      }
			  } else {
			      $data = array('msg' => "Mobile Number Is not Exist !",'code'=>404); 
			  }
	 }
      
      $this->response($data, REST_Controller::HTTP_OK);

}

   



}

?>