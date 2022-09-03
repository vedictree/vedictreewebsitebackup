<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Forgetpass extends REST_Controller 
{



 public function index_post()
{
	
        
        $p_mobile  = $this->input->post('p_mobile');
       
        if($p_mobile==""){
            $data = array('msg' => "Mobile required",'code'=>404);
        
        }else{
            
            $check_paranet_exists = $this->apimodel->check_paranet_exists_forgetpass($p_mobile);
            if(empty($check_paranet_exists)){
                $data = array('msg' => "Mobile not registerd",'res'=>$check_paranet_exists,'code'=>404);
            }else{
            
                    $otpnumber = rand(1111,9999);
        			$updatearry = array('OTP'=>$otpnumber);
        			$message = trim("Otp number for Verification");
        			$res = sendsmsweb($p_mobile,$otpnumber,$message);
        			if($res=="fail" || $res=="InsufficientBalance")
        			{
        				$data_otp_array = array(
        		        'OTP'  		=> $otpnumber,
        		        'otp_status'  		=> 2         //failed sending sms
        				);
        			}else{
        				$data_otp_array = array(
        		        'OTP'  		=> $otpnumber,
        		        'otp_status'  		=> 1          //success sending sms
        				);
        
        			}
        			$this->db->where('p_mobile',$p_mobile);
        			$user_otp_data = $this->db->update('tbl_parents',$data_otp_array);
        		
                    if($user_otp_data==1){
                        $data = array('msg' => "Otp Send on Mobile",'res'=>$otpnumber,'code'=>200);
                    }else{
                        
                        $data = array('msg' => "Not Registerd",'res'=>$check_paranet_exists,'code'=>404);
                    }
                }
             
                $this->response($data, REST_Controller::HTTP_OK);
        	}
}   


}

?>