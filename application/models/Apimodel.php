<?php
class apiModel extends CI_Model
{

	public function getdata($studentMobile,$studentPass)
	{
	    
	      
	    
		$stdentAttendancelog = array('logRandomId'=>rand(111111,999999));
    	$this->db->where('studentMobile',$studentMobile);
    	$this->db->or_where('studentAltMobile',$studentMobile);
    	$this->db->update('studentreg',$stdentAttendancelog);
    	
		$this->db->where('studentMobile',$studentMobile);
		$this->db->where('studentPass',sha1($studentPass));
		$this->db->where('studentStatus',1);
		$this->db->where('onlyapplogin',1);
		$res = $this->db->get('studentreg')->result();
		
		if(empty($res)){
            
			$this->db->where('studentAltMobile',$studentMobile);
			$this->db->where('studentPass',sha1($studentPass));
			$this->db->where('studentStatus',1);
			$this->db->where('onlyapplogin',1);
			$res1 = $this->db->get('studentreg')->result();
			 
			 if(empty($res1)){
			    
			    $this->db->where('studentMobile',$studentMobile);
			    $this->db->where('studentPass',sha1($studentPass));
			    $this->db->where('studentStatus',1);
			   return  $res2 = $this->db->get('studentreg')->result();
			 }else{
			     return $res;
			 }
			
		}else{
		    
		$this->db->where('studentMobile',$studentMobile);
		$this->db->where('studentPass',sha1($studentPass));
		$this->db->where('studentStatus',1);
		$result = $this->db->get('studentreg')->result();
		
		if(empty($result)){
            
			$this->db->where('studentAltMobile',$studentMobile);
			$this->db->where('studentPass',sha1($studentPass));
			$this->db->where('studentStatus',1);
			return $result = $this->db->get('studentreg')->result();
			
		}else{
		
		        return $result;
		    }
		}

	}


public function deniedmobileaccess($studentMobile){


    $this->db->where('studentMobile',$studentMobile);
	$this->db->where('createDT',date("Y-m-d"));
	$this->db->where('mobStatus',1);
	$res = $this->db->get('tbl_denied_mobile_access')->result_array();
	if(!empty($res))
	{
		return 1;
	}else{

		$data = array('studentMobile'=>$studentMobile,'createDT'=>date('Y-m-d'),'mobStatus'=>1);
		$res = $this->db->insert('tbl_denied_mobile_access',$data);
		if($res==1){
		   return 2;
		}else{
		   return 0;
		}
	}




   }
    
    
    function check_paranet_exists($p_mobile,$p_email){
     
     $this->db->where('p_mobile',$p_mobile);
     $this->db->where('p_email',$p_email);
     $result = $this->db->get('tbl_parents')->result_array();
		if(!empty($result)){
		   return $result;
		}else{
		   return $result;
		}
		
    }
    
    function check_paranet_exists_login($p_mobile,$p_password){
        $this->db->where('p_mobile',$p_mobile);
        $this->db->where('p_password',sha1($p_password));
        $this->db->join('studentreg', 'studentreg.studentMobile = tbl_parents.p_mobile', 'left');
        $result = $this->db->get('tbl_parents')->result_array();
		if(!empty($result)){
		   return $result;
		}else{
		   return $result;
		}
		
    }
    function check_paranet_exists_otp($otp,$p_mobile){
         $this->db->where('OTP',$otp);
         $this->db->where('p_mobile',$p_mobile);
        $result = $this->db->get('tbl_parents')->result_array();
		if(!empty($result)){
		   return $result;
		}else{
		   return $result;
		}
    }
    
    function check_paranet_exists_forgetpass($p_mobile){
         $this->db->where('p_mobile',$p_mobile);
        $result = $this->db->get('tbl_parents')->result_array();
		if(!empty($result)){
		   return $result;
		}else{
		   return $result;
		}
    }
    
    function update_parent_password($p_mobile,$p_password){
        $data = array('p_password'=>sha1($p_password));
        $this->db->where('p_mobile',$p_mobile);    
        $result = $this->db->update('tbl_parents',$data);
		if($result==1){
		   return 1;
		}else{
		   return 0;
		}
    }
    
    function check_physical_data_exist($form_number,$student_mobile){
      
        $this->db->where('form_number',$form_number);    
        $this->db->where('student_mobile',$student_mobile);    
        $result = $this->db->get('tbl_add_physical_fees')->result_array();
		if($result){
		   return $result;
		}else{
		   return $result;
		}
		
    } 
    
    function filter_fees_data($form_number,$student_mobile){
        
        $this->db->where('form_number',$form_number);    
        $this->db->or_where('student_mobile',$student_mobile);    
        $result = $this->db->get('tbl_add_physical_fees')->result_array();
		if($result){
		   return $result;
		}else{
		   return $result;
		}
		
    }
    
    function getphysical_fees_data(){
        $result = $this->db->get('tbl_add_physical_fees')->result_array();
		if($result){
		   return $result;
		}else{
		   return $result;
		}
    }
    
    function add_fedd_physical_data($data){
         $result = $this->db->insert('tbl_add_physical_fees',$data);
		if($result==1){
		   return 1;
		}else{
		   return 0;
		}
    }
    
    function regsiter_parent($p_mobile,$p_name,$p_email,$p_password)
    {
        $data = array( 'p_mobile'=>$p_mobile,
                        'p_name'=>$p_name,
                        'p_email'=>$p_email,
                        'p_password'=>sha1($p_password),
                        
                        );
                        
        $result = $this->db->insert('tbl_parents',$data);
		if($result==1){
		   return 1;
		}else{
		   return 0;
		}
    }
    
    function add_followup($fk_userId,$remark,$fk_adminId){
        $data = array( 'fk_userId'=>$fk_userId,
                        'remark'=>$remark,
                        'fk_adminId'=>$fk_adminId,

                        
                        );
                        
        $result = $this->db->insert('tbl_followup',$data);
		if($result==1){
		   return 1;
		}else{
		   return 0;
		}
    }
    
    function getfollowup($fk_userId){
        $this->db->where('fk_userId',$fk_userId);
        $result = $this->db->get('tbl_followup')->result_array();
		if(!empty($result)){
		   return $result;
		}else{
		   return $result;
		}
    }
    
    function get_admin_data($studentMobile,$studentPass){
        $this->db->where('studentMobile',$studentMobile);
        $this->db->where('studentPass',sha1($studentPass));
        $result = $this->db->get('tbl_admin_ved')->result_array();
        
		if(!empty($result)){
		   return $result;
		}else{
		   return $result;
		}
    }


   public function change_mobile_status($studentMobile){
       
       $this->db->where('studentMobile',$studentMobile);
       $result = $this->db->delete('tbl_denied_mobile_access');
		if($result==1){
		   return 1;
		}else{
		   return 0;
		}
		
       
   }
   
   function pendingfees(){
       $data = array();
       
       $currentdate = date("Y-m-d");
      
       $this->db->where('first_installment_date',$currentdate);
       $this->db->or_where('second_installment_date',$currentdate);
       $this->db->or_where('third_installment_date',$currentdate);
       $this->db->or_where('five_installment_date',$currentdate);
       $this->db->or_where('six_installment_date',$currentdate);
       $result = $this->db->get('tbl_add_physical_fees')->result_array();
		if($result){
		  
		    foreach($result as $value){
		        
		        if($value['total_fees']-$value['pending_fees'] > 0)
		        {
		        
		            $data[] = $result;         
		            
		        }else{
		            $data = $data;
		        }
		        
		    }
		    
		    return $data;
		   
		}else{
		   return $result;
		}
       
   }
   
  public function updateData($studId){
       
       $this->db->where('studId',$studId);
       $result = $this->db->get('studentreg')->result_array();
		if($result){
		   return $result;
		}else{
		   return $result;
		}
		
       
   }
   
	
	
	
}


?>