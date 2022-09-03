<?php
 $this->load->view('header');
?>
<style type="text/css">
    .thclass{
        width:400px;
    }
    
</style>
      
        <div id="layout-wrapper">
            <?php $this->load->view('topbar'); ?>
            <?php $this->load->view('sidebar'); ?>

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="card">
                              <div class="card-body">
                                  <!--<h2>Fee Receipt</h2>-->
                                  <div class="row">
                                      <div class="col-md-2">
                                         <img src="<?php echo base_url('assets/images/logo.png')?>" style="height: 128px;" alt="" >
                                      </div>
                                      <div class="col-md-10">
                                          <h1 style="text-align:center;margin-right: 400px;">VEDIC TREE</h1>
                                          <h1 style="text-align:center;margin-right: 400px;">PRESCHOOL</h1>
                                          <p>Amrut Height,Plot No:23,Sec-4 Karanjade,Panvel. Mob:9320067800 Email :Vedictree@gmail.com</p>
                                      </div>
                                  </div>
                                  <a onclick="window.print()" style="float:right;top:-40px;position:relative;" class="btn btn-primary">Print</a>
                                  
                                <form method="POST" action="<?php echo base_url('dashboard'); ?>">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Date</label>
                                                <?php  $year =  date("Y") ."-". date('Y', strtotime('+1 year')); ?>
                                                <input type="date" class="form-control" value="<?php echo $list_Fees[0]['currentdate'];  ?>" name="currentdate"  id="currentdate" readonly placeholder="">
                                                <span style="color:red"><?php echo form_error('currentdate');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Academic Year</label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['academicyear'];  ?>" name="academicyear"  id="academicyear" readonly placeholder="Enter  Academic year">
                                                <span style="color:red"><?php echo form_error('academicyear');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Receipt Number</label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['receiptnumber'];  ?>" name="receiptnumber"  id="receiptnumber" readonly placeholder="Enter  Receipt number">
                                                <span style="color:red"><?php echo form_error('receiptnumber');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Student Name</label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['studName'];  ?>" name="studName"  id="studName" readonly placeholder="Enter Student Name">
                                                <span style="color:red"><?php echo form_error('studName');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Received with Thanks from </label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['receivedthank'];  ?>" name="receivedthank"  id="receivedthank" readonly placeholder="Enter  Received with Thanks from">
                                                <span style="color:red"><?php echo form_error('receivedthank');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> The Sum Of Rupees In Word</label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['rupeesword']; ?>" name="rupeesword"  id="rupeesword" readonly placeholder="Enter  The Sum Of Rupees In Word">
                                                <span style="color:red"><?php echo form_error('rupeesword');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Paid By </label>
                                                <hr>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Cash</label>
                                                <input type="checkbox" class="" value="<?php echo $list_Fees[0]['cash']; ?>" <?php if($list_Fees[0]['cash']!="") { echo "checked"; }else{ echo ""; } ?> name="cash" readonly  id="cash" placeholder="" >
                                                <span style="color:red"><?php echo form_error('cash');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Transfer</label>
                                                <input type="checkbox" class="" value="<?php echo $list_Fees[0]['Transfer']; ?>" <?php if($list_Fees[0]['Transfer']!="") { echo "checked"; }else{ echo ""; } ?> name="Transfer" readonly id="Transfer" placeholder="" >
                                                <span style="color:red"><?php echo form_error('Transfer');?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Cheque</label>
                                                <input type="checkbox" class="" value="<?php echo $list_Fees[0]['Cheque']; ?>" <?php if($list_Fees[0]['Cheque']!="") { echo "checked"; }else{ echo ""; } ?> name="Cheque"  id="Cheque" placeholder="" >
                                                <span style="color:red"><?php echo form_error('Cheque');?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Cheque Number</label>
                                                <input type="number" class="form-control" value="<?php echo $list_Fees[0]['ChequeNo'];  ?>"  name="ChequeNo"  id="ChequeNo" placeholder="" readonly >
                                                <span style="color:red"><?php echo form_error('ChequeNo');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Transfer Date</label>
                                                <input type="date" class="form-control" value="<?php echo $list_Fees[0]['TransferDate'];  ?>" name="TransferDate"  id="TransactionDate" placeholder="" readonly >
                                                <span style="color:red"><?php echo form_error('TransactionDate');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Bank Name</label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['BankName'];  ?>" name="BankName"  id="BankName" placeholder="Bank Name" readonly>
                                                <span style="color:red"><?php echo form_error('BankName');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Branch Number</label>
                                                <input type="number" class="form-control" value="<?php echo $list_Fees[0]['BranchNo'];  ?>" name="BranchNo"  id="BranchNo" placeholder="Branch Number" readonly>
                                                <span style="color:red"><?php echo form_error('BranchNo');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Branch </label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['Branch'];  ?>" name="Branch"  id="Branch" placeholder="Branch Name" readonly>
                                                <span style="color:red"><?php echo form_error('Branch');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Balance Amount</label>
                                                <input type="number" class="form-control" value="<?php echo $list_Fees[0]['Balanceamt'];  ?>" name="Balanceamt"  id="Balanceamt" placeholder="" readonly >
                                                <span style="color:red"><?php echo form_error('Balanceamt');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Due Date </label>
                                                <input type="date" class="form-control" value="<?php echo $list_Fees[0]['ChequeNo'];  ?>" name="ChequeNo"  id="ChequeNo" placeholder="" readonly>
                                                <span style="color:red"><?php echo form_error('ChequeNo');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Admission Desire In</label>
                                                <hr>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Nursery</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']="nursery") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="grade" placeholder="" readonly>
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Jr.kg</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']=="jrkg") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="grade" placeholder="" readonly >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Sr.kg</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']=="srkg") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="grade" placeholder="" readonly>
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 1</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']=="1") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="ChequeNo" placeholder="" readonly >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 2</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']=="2") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="grade" placeholder="" readonly >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 3</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']=="3") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="grade" placeholder="" readonly>
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 4</label>
                                                <input type="checkbox" class="" value="" <?php if($list_Fees[0]['grade']=="4") { echo "checked"; }else{ echo ""; } ?> name="grade"  id="grade" placeholder="" readonly>
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Ruppes</label>
                                                <input type="number" class="form-control" value="<?php echo $list_Fees[0]['finalamt']; ?>" name="finalamt"  id="finalamt" placeholder="" readonly>
                                                <span style="color:red"><?php echo form_error('finalamt');?></span>
                                            </div>
                                        </div>
                                        

                                        
                                    </div>
                                </form>
                              </div>
                        </div>
                           
                        
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
        
        
        
        
            
                
              <?php $this->load->view('footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       <?php $this->load->view('footd');?>

    



