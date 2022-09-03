<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Editfees extends REST_Controller 
{


    
     public function index_post()
    {
    	
            
            $feesid                   = $this->input->post('feesid');
            $form_number              = $this->input->post('form_number');
            $student_name             = $this->input->post('student_name');
            $student_mobile           = $this->input->post('student_mobile');
            $student_address          = $this->input->post('student_address');
            $formstatus               = $this->input->post('formstatus');
            $admissiondate            = $this->input->post('admissiondate');
            $remark_fees              = $this->input->post('remark_fees');
            $fk_classId               = $this->input->post('fk_classId');
            $book_status              = $this->input->post('book_status');
            $remark_offer             = $this->input->post('remark_offer');
            $bag_status               = $this->input->post('bag_status');
            $uniform_status           = $this->input->post('uniform_status');
            $total_fees               = $this->input->post('total_fees');
            $fees_received            = $this->input->post('fees_received');
            $pending_fees             = $this->input->post('pending_fees');
            $gender                   = $this->input->post('gender');
            $discount                 = $this->input->post('discount');
            $other                    = $this->input->post('other');
            $first_installment        = $this->input->post('first_installment');
            $second_installment       = $this->input->post('second_installment');
            $third_installment        = $this->input->post('third_installment');
            $four_installment         = $this->input->post('four_installment');
            $five_installment         = $this->input->post('five_installment');
            $six_installment          = $this->input->post('six_installment');
            $first_installment_date   = $this->input->post('first_installment_date');
            $second_installment_date  = $this->input->post('second_installment_date');
            $third_installment_date   = $this->input->post('third_installment_date');
            $four_installment_date    = $this->input->post('four_installment_date');
            $five_installment_date    = $this->input->post('five_installment_date');
            $six_installment_date     = $this->input->post('six_installment_date');
            
           if($form_number==""){
                $data = array('msg' => " form_number required",'code'=>404);
            }else if($student_name==""){
                $data = array('msg' => "remark required",'code'=>404);
            }else if($student_mobile==""){
                $data = array('msg' => " student_mobile required",'code'=>404);
            }else if($student_address==""){
                $data = array('msg' => " student_address required",'code'=>404);
            }else if($formstatus==""){
                $data = array('msg' => " formstatus required",'code'=>404);
            }else if($admissiondate==""){
                $data = array('msg' => " admissiondate required",'code'=>404);
            }else if($remark_fees==""){
                $data = array('msg' => " remark_fees required",'code'=>404);
            }else if($fk_classId==""){
                $data = array('msg' => " fk_classId required",'code'=>404);
            }else if($book_status==""){
                $data = array('msg' => " book_status required",'code'=>404);
            }else if($bag_status==""){
                $data = array('msg' => " bag_status required",'code'=>404);
            }else if($uniform_status==""){
                $data = array('msg' => " uniform_status required",'code'=>404);
            }else if($total_fees==""){
                $data = array('msg' => " total_fees required",'code'=>404);
            }else if($fees_received==""){
                $data = array('msg' => " fees_received required",'code'=>404);
            }else if($pending_fees==""){
                $data = array('msg' => " pending_fees required",'code'=>404);
            }else if($gender==""){
                $data = array('msg' => " gender required",'code'=>404);
            }
            else{
                
                $insertdata = array(
                    
                    'form_number'              => $form_number,
                    'student_name'             => $student_name,
                    'student_mobile'           => $student_mobile,
                    'student_address'          => $student_address,
                    'formstatus'               => $formstatus,
                    'admissiondate'            => $admissiondate,
                    'remark_fees'              => $remark_fees,
                    'fk_classId'               => $fk_classId,
                    'book_status'              => $book_status,
                    'remark_offer'             => $remark_offer,
                    'bag_status'               => $bag_status,
                    'physical_fees_status'     => 1,
                    'uniform_status'           => $uniform_status,
                    'total_fees'               => $total_fees,
                    'fees_received'            => $fees_received,
                    'pending_fees'             => $pending_fees,
                    'gender'                   => $gender,
                    'discount'                 => $discount,
                    'other'                    => $other,
                    'first_installment'        => $first_installment,
                    'second_installment'       => $second_installment,
                    'third_installment'        => $third_installment,
                    'four_installment'         => $four_installment,
                    'five_installment'         => $five_installment,
                    'six_installment'          => $six_installment,
                    'first_installment_date'   => $first_installment_date,
                    'second_installment_date'  => $second_installment_date,
                    'third_installment_date'   => $third_installment_date,
                    'four_installment_date'    => $four_installment_date,
                    'five_installment_date'    => $five_installment_date,
                    'six_installment_date'     => $six_installment_date,
            
                    );
                    
               
                    
                    $res  = $this->regModel->updatefeesphysical($insertdata,$feesid);
                    if($res==1){
                        $data = array('msg' => " Fees updated",'res'=>$res,'code'=>200);
                    }else{
                        
                        $data = array('msg' => "Not updated",'res'=>$res,'code'=>404);
                    }
                
            }
         
            $this->response($data, REST_Controller::HTTP_OK);
    }
    
    
    function deleteid_post(){
        
         $feesid                   = $this->input->post('feesid');
         if($feesid==""){
                $data = array('msg' => " feesid required",'code'=>404);
            }else{
              $res = $this->regModel->deletephysicalfeesId($feesid);    
              if($res==1){
                        $data = array('msg' => " Fees Id Deleted",'res'=>$res,'code'=>200);
                    }else{
                        
                        $data = array('msg' => "Not Deleted",'res'=>$res,'code'=>404);
                    }
                    
            }
             $this->response($data, REST_Controller::HTTP_OK);
          
         
    }
    
    function addfeesreceipt_post()
    {
        
            $currentdate               =  $this->input->post('currentdate');
            $academicyear              =  $this->input->post('academicyear');
            $receiptnumber             =  $this->input->post('receiptnumber');
            $studName                  =  $this->input->post('studName');
            $formstatus                =  $this->input->post('rupeesword');
            $receivedthank             =  $this->input->post('receivedthank');
            $cash                      =  $this->input->post('cash');
            $Transfer                  =  $this->input->post('Transfer');
            $Cheque                    =  $this->input->post('Cheque');
            $ChequeNo                  =  $this->input->post('ChequeNo');
            $TransferDate              =  $this->input->post('TransferDate');
            $Balanceamt                =  $this->input->post('Balanceamt');
            $BranchNo                  =  $this->input->post('BranchNo');
            $Branch                    =  $this->input->post('Branch');
            $grade                     =  $this->input->post('grade');
            $finalamt                  =  $this->input->post('finalamt');
            $feesid                  =  $this->input->post('feesid');
          
           
            
            $insertdata = array(
                            'currentdate'               =>  $this->input->post('currentdate'),
                            'academicyear'              =>  $this->input->post('academicyear'),
                            'receiptnumber'             =>  $this->input->post('receiptnumber'),
                            'studName'                  =>  $this->input->post('studName'),
                            'rupeesword'                =>  $this->input->post('rupeesword'),
                            'receivedthank'             =>  $this->input->post('receivedthank'),
                            'cash'                      =>  $this->input->post('cash'),
                            'Transfer'                  =>  $this->input->post('Transfer'),
                            'Cheque'                    =>  $this->input->post('Cheque'),
                            'ChequeNo'                  =>  $this->input->post('ChequeNo'),
                            'TransferDate'              =>  $this->input->post('TransferDate'),
                            'Balanceamt'                =>  $this->input->post('Balanceamt'),
                            'BranchNo'                  =>  $this->input->post('BranchNo'),
                            'Branch'                    =>  $this->input->post('Branch'),
                            'grade'                     =>  $this->input->post('grade'),
                            'finalamt'                  =>  $this->input->post('finalamt'),
                            'fk_feesid'                 =>  $feesid,
                    );
            
            $updatefees = $this->regModel->updatefees($feesid,$finalamt);
            if($updatefees==0){
                $data['error'] = array('error' => "Fess not updated !");
            }else{
                    
            $res  = $this->regModel->add_fee_receipt($insertdata);
             if($res==1){
                          $data['error'] = array('error' => "Data Added Successfully !");
             }else{
                          $data['error'] = array('error' => "Data Not Added !");
             }
               
                
            }
             $this->response($data, REST_Controller::HTTP_OK);
             
             
    }
    
    
    function showphyfeereceipt_post(){
        
         $feesid                   = $this->input->post('feesid');
         if($feesid==""){
                $data = array('msg' => " feesid required",'code'=>404);
            }else{
              $res = $this->regModel->showphyfeereceipt($feesid);    
              if($res==1){
                        $data = array('msg' => "fees data",'res'=>$res,'code'=>200);
                    }else{
                        
                        $data = array('msg' => "Not found",'res'=>$res,'code'=>404);
                    }
                    
            }
             $this->response($data, REST_Controller::HTTP_OK);
        
    }
    

}

?>