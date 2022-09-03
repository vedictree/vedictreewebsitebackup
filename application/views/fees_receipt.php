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
                                  
                                  <h2>Fee Receipt</h2>
                                  
                                  <a href="<?php echo base_url('dashboard/show_fees_physical');?>" style="float:right;top:-40px;position:relative;" class="btn btn-primary">Refresh</a>
                                  
                                <form method="POST" action="<?php echo base_url('dashboard/add_fee_receipt'); ?>">
                                 
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Date</label>
                                                <?php  $year =  date("Y") ."-". date('Y', strtotime('+1 year')); ?>
                                                <input type="date" class="form-control" value="<?php echo set_value('currentdate');  ?>" name="currentdate"  id="currentdate" placeholder="Enter Form Number">
                                                <span style="color:red"><?php echo form_error('currentdate');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Academic Year</label>
                                                <input type="text" class="form-control" value="<?php echo $year  ?>" name="academicyear"  id="academicyear" placeholder="Enter  Academic year">
                                                <span style="color:red"><?php echo form_error('academicyear');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Receipt Number</label>
                                                <input type="text" class="form-control" value="<?php echo set_value('receiptnumber');  ?>" name="receiptnumber"  id="receiptnumber" placeholder="Enter  Receipt number">
                                                <span style="color:red"><?php echo form_error('receiptnumber');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Student Name</label>
                                                <input type="text" class="form-control" value="<?php echo $list_Fees[0]['student_name'];  ?>" name="studName"  id="studName" placeholder="Enter Student Name">
                                                <span style="color:red"><?php echo form_error('studName');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Received with Thanks from </label>
                                                <input type="text" class="form-control" value="<?php echo set_value('receivedthank');  ?>" name="receivedthank"  id="receivedthank" placeholder="Enter  Received with Thanks from">
                                                <span style="color:red"><?php echo form_error('receivedthank');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Ruppes</label>
                                                <input type="text"  class="form-control" value="" onkeypress="return onlyNumbers(this.value);" onkeyup="NumToWord(this.value,'divDisplayWords');" name="finalamt"  id="Text1" placeholder="Enter Rupees" >
                                                <span style="color:red"><?php echo form_error('finalamt');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> The Sum Of Rupees In Word</label>
                                                <input type="text" readonly class="form-control" value="" name="rupeesword"  id="divDisplayWords" placeholder="Enter  The Sum Of Rupees In Word">
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
                                                <input type="checkbox" class="" value="cash" name="cash"  id="cash" placeholder="" >
                                                <span style="color:red"><?php echo form_error('cash');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Transfer</label>
                                                <input type="checkbox" class="" value="Transfer" name="Transfer"  id="Transfer" placeholder="" >
                                                <span style="color:red"><?php echo form_error('Transfer');?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Cheque</label>
                                                <input type="checkbox" class="" value="Cheque" name="Cheque"  id="Cheque" placeholder="" >
                                                <span style="color:red"><?php echo form_error('Cheque');?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Cheque Number</label>
                                                <input type="number" class="form-control" value="<?php echo set_value('ChequeNo');  ?>" name="ChequeNo"  id="ChequeNo" placeholder="" >
                                                <span style="color:red"><?php echo form_error('ChequeNo');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Transfer Date</label>
                                                <input type="date" class="form-control" value="<?php echo set_value('TransferDate');  ?>" name="TransactionDate"  id="TransactionDate" placeholder="" >
                                                <span style="color:red"><?php echo form_error('TransactionDate');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Bank Name</label>
                                                <input type="text" class="form-control" value="<?php echo set_value('BankName');  ?>" name="BankName"  id="BankName" placeholder="Bank Name" >
                                                <span style="color:red"><?php echo form_error('BankName');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Branch Number</label>
                                                <input type="number" class="form-control" value="<?php echo set_value('BranchNo');  ?>" name="BranchNo"  id="BranchNo" placeholder="Branch Number" >
                                                <span style="color:red"><?php echo form_error('BranchNo');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Branch </label>
                                                <input type="text" class="form-control" value="<?php echo set_value('Branch');  ?>" name="Branch"  id="Branch" placeholder="Branch Name" >
                                                <span style="color:red"><?php echo form_error('Branch');?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Balance Amount ( <?php echo $list_Fees[0]['pending_fees']; ?>)</label>
                                                <input type="number" class="form-control" value="<?php echo set_value('Balanceamt');  ?>" name="Balanceamt"  id="Balanceamt" required placeholder="" >
                                                <span style="color:red"><?php echo form_error('Balanceamt');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Due Date </label>
                                                <input type="date" class="form-control" value="<?php echo set_value('ChequeNo');  ?>" name="ChequeNo"  id="ChequeNo" placeholder="" >
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
                                                <input type="radio" class="" value="nursery" name="grade"  id="grade" placeholder=""  >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Jr.kg</label>
                                                <input type="radio" class="" value="jrkg" name="grade"  id="grade" placeholder="" >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Sr.kg</label>
                                                <input type="radio" class="" value="srkg" name="grade"  id="grade" placeholder="" >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 1</label>
                                                <input type="radio" class="" value="1" name="grade"  id="ChequeNo" placeholder="" >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                         <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 2</label>
                                                <input type="radio" class="" value="2" name="grade"  id="grade" placeholder="" >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 3</label>
                                                <input type="radio" class="" value="3" name="grade"  id="grade" placeholder=""  >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <label for="username"> Grade 4</label>
                                                <input type="radio" class="" value="4" name="grade"  id="grade" placeholder="" >
                                                <span style="color:red"><?php echo form_error('grade');?></span>
                                            </div>
                                        </div>
                                        

                                        <div class="col-xl-12 col-md-6" style="top:12px;">
                                            <div class="form-group" >
                                                   <input type="hidden" name="feesid" value="<?php echo $list_Fees[0]['feesid'];  ?>">
                                                   <input type="hidden" id="balamt" value="<?php echo $list_Fees[0]['pending_fees']; ?>">
                                               <button class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">submit</button>
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

       <script type="text/javascript">
       
        $(document).ready(function() {
         $('#datatables').dataTable( {
            "iDisplayLength": 10,
             "deferRender": true ,
             stateSave: true
         }
             );
         } );



           $(document).ready(function() {

                $(".mdi-delete").click(function(){

                    var studId =  $(this).attr('id');
                    $.ajax({
                        type:"POST",
                        data:{studId:studId},
                        url:"<?php echo base_url('dashboard/deletestudid')?>",
                        success:function(res){

                            if(res==1){
                                swal({
                                      title:"Student Id is Deleted!",
                                      text: "You clicked the button!",
                                      icon: "success",
                                      button: "ok",
                                    });
                            }
                            setTimeout(function(){
                               window.location.reload(1);
                            }, 5000);

                        },
                        error:function(error){
                            console.log(error);
                        }
                    });
                });
                
                
                $("#Text1").keyup(function(){
                
                var amount = $(this).val();
                var balamt = $("#balamt").val();
                
                var remainamt = parseInt(balamt - amount);
                
                $("#Balanceamt").val(remainamt);
                
                    
                });
                
                
                
            } );

       </script>

<?php if(isset($error)){ ?>
  <script type="text/javascript">
    color = Math.floor((Math.random() * 4) + 1);

      $.notify({
          icon: "tim-icons icon-bell-55",
          message: "<?php if(isset($error)){ echo $error['error']; } ?>"

        },{
            type: type[color],
            timer: 8000,
        });
      
    //   setTimeout(function() {
    //                 window.location.href = '<?php echo base_url('dashboard/getstudlist')?>';
    //   }, 2000);
       
       
  </script>

<?php } ?>

<script>
    function check() {
        if(confirm("Are You Sure You Want To Delete")==true)
        {
            return true;
        }else{
            return false;
        }
    }
    
    function checkstu() {
        if(confirm("Are You Sure You Want Activate Student ? ")==true)
        {
            return true;
        }else{
            return false;
        }
    }
    
    
</script>

   <script  type="text/javascript">
    	function onlyNumbers(evt) {
    var e = event || evt; // For trans-browser compatibility
    var charCode = e.which || e.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function NumToWord(inputNumber, outputControl) {
    
    console.log(outputControl);
    var str = new String(inputNumber)
    var splt = str.split("");
    var rev = splt.reverse();
    var once = ['Zero', ' One', ' Two', ' Three', ' Four', ' Five', ' Six', ' Seven', ' Eight', ' Nine'];
    var twos = ['Ten', ' Eleven', ' Twelve', ' Thirteen', ' Fourteen', ' Fifteen', ' Sixteen', ' Seventeen', ' Eighteen', ' Nineteen'];
    var tens = ['', 'Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty', ' Ninety'];

    numLength = rev.length;
    var word = new Array();
    var j = 0;

    for (i = 0; i < numLength; i++) {
        switch (i) {

            case 0:
                if ((rev[i] == 0) || (rev[i + 1] == 1)) {
                    word[j] = '';
                }
                else {
                    word[j] = '' + once[rev[i]];
                }
                word[j] = word[j];
                break;

            case 1:
                aboveTens();
                break;

            case 2:
                if (rev[i] == 0) {
                    word[j] = '';
                }
                else if ((rev[i - 1] == 0) || (rev[i - 2] == 0)) {
                    word[j] = once[rev[i]] + " Hundred ";
                }
                else {
                    word[j] = once[rev[i]] + " Hundred and";
                }
                break;

            case 3:
                if (rev[i] == 0 || rev[i + 1] == 1) {
                    word[j] = '';
                }
                else {
                    word[j] = once[rev[i]];
                }
                if ((rev[i + 1] != 0) || (rev[i] > 0)) {
                    word[j] = word[j] + " Thousand";
                }
                break;

                
            case 4:
                aboveTens();
                break;

            case 5:
                if ((rev[i] == 0) || (rev[i + 1] == 1)) {
                    word[j] = '';
                }
                else {
                    word[j] = once[rev[i]];
                }
                if (rev[i + 1] !== '0' || rev[i] > '0') {
                    word[j] = word[j] + " Lakh";
                }
                 
                break;

            case 6:
                aboveTens();
                break;

            case 7:
                if ((rev[i] == 0) || (rev[i + 1] == 1)) {
                    word[j] = '';
                }
                else {
                    word[j] = once[rev[i]];
                }
                if (rev[i + 1] !== '0' || rev[i] > '0') {
                    word[j] = word[j] + " Crore";
                }                
                break;

            case 8:
                aboveTens();
                break;


            default: break;
        }
        j++;
    }

    function aboveTens() {
        if (rev[i] == 0) { word[j] = ''; }
        else if (rev[i] == 1) { word[j] = twos[rev[i - 1]]; }
        else { word[j] = tens[rev[i]]; }
    }

    word.reverse();
    var finalOutput = '';
    for (i = 0; i < numLength; i++) {
        finalOutput = finalOutput + word[i];
    }
    
    console.log(finalOutput);
    $("#divDisplayWords").val(finalOutput);
}
    </script>
    
    