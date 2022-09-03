<?php
 $this->load->view('header');
 $monthdata =  required_data();

?>
<style type="text/css">
    .thclass{
        width:400px;
    }
</style>
<!-- Begin page -->
<div id="layout-wrapper">
<?php $this->load->view('topbar'); ?>
<?php $this->load->view('sidebar'); ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                          <div class="card-body">
                               <h1>Total Month Payment Received Year (<?php echo date('Y');?>)</h1>
                            
                          </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Month Payment Received  Nursery</h4>
                           <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="thclass">#Id</th>
                                    <th class="thclass">Month Name</th>
                                    <th class="thclass">Total Fees</th>
                                    <th class="thclass">Received</th>
                                    <th class="thclass">Pending</th>
                                   
                                </tr>
                                </thead>  
                                <tbody>
                                  
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo $total_fees;
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-02-01";
                                    $lastdayofmonth = date("Y")."-02-29";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-03-01";
                                    $lastdayofmonth = date("Y")."-03-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-04-01";
                                    $lastdayofmonth = date("Y")."-04-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-05-01";
                                    $lastdayofmonth = date("Y")."-05-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-06-01";
                                    $lastdayofmonth = date("Y")."-06-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-07-01";
                                    $lastdayofmonth = date("Y")."-07-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-08-01";
                                    $lastdayofmonth = date("Y")."-08-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>September</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>October</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-10-01";
                                    $lastdayofmonth = date("Y")."-10-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-11-01";
                                    $lastdayofmonth = date("Y")."-11-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-12-01";
                                    $lastdayofmonth = date("Y")."-12-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                
                                  
                                </tbody>
                           </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        
        
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Month Payment Received Junior </h4>
                           <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="thclass">#Id</th>
                                    <th class="thclass">Month Name</th>
                                    <th class="thclass">Total Fees</th>
                                    <th class="thclass">Received</th>
                                    <th class="thclass">Pending</th>
                                   
                                </tr>
                                </thead>  
                                <tbody>
                                  
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo $total_fees;
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-02-01";
                                    $lastdayofmonth = date("Y")."-02-29";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-03-01";
                                    $lastdayofmonth = date("Y")."-03-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-04-01";
                                    $lastdayofmonth = date("Y")."-04-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-05-01";
                                    $lastdayofmonth = date("Y")."-05-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-06-01";
                                    $lastdayofmonth = date("Y")."-06-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-07-01";
                                    $lastdayofmonth = date("Y")."-07-31";
                                   $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-08-01";
                                    $lastdayofmonth = date("Y")."-08-31";
                                   $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>September</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-09-01";
                                    $lastdayofmonth = date("Y")."-09-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>October</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-10-01";
                                    $lastdayofmonth = date("Y")."-10-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-11-01";
                                    $lastdayofmonth = date("Y")."-11-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-12-01";
                                    $lastdayofmonth = date("Y")."-12-31";
                                    $res = show_pending_physical_junior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                               
                                
                                
                                  
                                </tbody>
                           </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        
        
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Month Payment Received Senior </h4>
                           <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="thclass">#Id</th>
                                    <th class="thclass">Month Name</th>
                                    <th class="thclass">Total Fees</th>
                                    <th class="thclass">Received</th>
                                    <th class="thclass">Pending</th>
                                   
                                </tr>
                                </thead>  
                                <tbody>
                                  
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo $total_fees;
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-02-01";
                                    $lastdayofmonth = date("Y")."-02-29";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-03-01";
                                    $lastdayofmonth = date("Y")."-03-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-04-01";
                                    $lastdayofmonth = date("Y")."-04-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-05-01";
                                    $lastdayofmonth = date("Y")."-05-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-06-01";
                                    $lastdayofmonth = date("Y")."-06-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-07-01";
                                    $lastdayofmonth = date("Y")."-07-31";
                                   $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-08-01";
                                    $lastdayofmonth = date("Y")."-08-31";
                                   $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>September</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-09-01";
                                    $lastdayofmonth = date("Y")."-09-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>October</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-10-01";
                                    $lastdayofmonth = date("Y")."-10-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-11-01";
                                    $lastdayofmonth = date("Y")."-11-31";
                                    $res = show_pending_physical_senior($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-12-01";
                                    $lastdayofmonth = date("Y")."-12-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                
                                
                                
                                  
                                </tbody>
                           </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        
        
        <div class="row" style="display:none">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Month Payment Received Physical Nursery </h4>
                           <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="thclass">#Id</th>
                                    <th class="thclass">Month Name</th>
                                    <th class="thclass">Total Fees</th>
                                    <th class="thclass">Received</th>
                                    <th class="thclass">Pending</th>
                                   
                                </tr>
                                </thead>  
                                <tbody>
                                  
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo $total_fees;
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-02-01";
                                    $lastdayofmonth = date("Y")."-02-29";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-03-01";
                                    $lastdayofmonth = date("Y")."-03-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-04-01";
                                    $lastdayofmonth = date("Y")."-04-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-05-01";
                                    $lastdayofmonth = date("Y")."-05-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-06-01";
                                    $lastdayofmonth = date("Y")."-06-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-07-01";
                                    $lastdayofmonth = date("Y")."-07-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-08-01";
                                    $lastdayofmonth = date("Y")."-08-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>September</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>October</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-10-01";
                                    $lastdayofmonth = date("Y")."-10-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-11-01";
                                    $lastdayofmonth = date("Y")."-11-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-12-01";
                                    $lastdayofmonth = date("Y")."-12-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                
                                  
                                </tbody>
                           </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
        
        
        <div class="row" style="display:none">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Month Payment Received Physical Junior </h4>
                           <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="thclass">#Id</th>
                                    <th class="thclass">Month Name</th>
                                    <th class="thclass">Total Fees</th>
                                    <th class="thclass">Received</th>
                                    <th class="thclass">Pending</th>
                                   
                                </tr>
                                </thead>  
                                <tbody>
                                  
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo $total_fees;
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-02-01";
                                    $lastdayofmonth = date("Y")."-02-29";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-03-01";
                                    $lastdayofmonth = date("Y")."-03-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-04-01";
                                    $lastdayofmonth = date("Y")."-04-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-05-01";
                                    $lastdayofmonth = date("Y")."-05-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-06-01";
                                    $lastdayofmonth = date("Y")."-06-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-07-01";
                                    $lastdayofmonth = date("Y")."-07-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-08-01";
                                    $lastdayofmonth = date("Y")."-08-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>September</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>October</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-10-01";
                                    $lastdayofmonth = date("Y")."-10-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-11-01";
                                    $lastdayofmonth = date("Y")."-11-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-12-01";
                                    $lastdayofmonth = date("Y")."-12-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                
                                  
                                </tbody>
                           </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
        
        <div class="row" style="display:none">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Month Payment Received Physical Senior </h4>
                           <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="thclass">#Id</th>
                                    <th class="thclass">Month Name</th>
                                    <th class="thclass">Total Fees</th>
                                    <th class="thclass">Received</th>
                                    <th class="thclass">Pending</th>
                                   
                                </tr>
                                </thead>  
                                <tbody>
                                  
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo $total_fees;
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-02-01";
                                    $lastdayofmonth = date("Y")."-02-29";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-03-01";
                                    $lastdayofmonth = date("Y")."-03-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-04-01";
                                    $lastdayofmonth = date("Y")."-04-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo array_sum($total_fees);
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-05-01";
                                    $lastdayofmonth = date("Y")."-05-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-06-01";
                                    $lastdayofmonth = date("Y")."-06-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-07-01";
                                    $lastdayofmonth = date("Y")."-07-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-08-01";
                                    $lastdayofmonth = date("Y")."-08-31";
                                   $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>September</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($pending_fees)); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>October</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-10-01";
                                    $lastdayofmonth = date("Y")."-10-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>March</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-01-01";
                                    $lastdayofmonth = date("Y")."-01-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-11-01";
                                    $lastdayofmonth = date("Y")."-11-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo number_format(array_sum($fees_received)); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td><?php 
                                    
                                    $currentdate    = date("Y")."-12-01";
                                    $lastdayofmonth = date("Y")."-12-31";
                                    $res = show_pending_physical_nursery($currentdate,$lastdayofmonth);
                                    
                                    if(!empty($res)){
                                        $total_fees = array();
                                        $fees_received = array();
                                        $pending_fees = array();
                                        foreach($res as $val){
                                            $total_fees[] = $val['total_fees'];
                                            $fees_received[] = $val['fees_received'];
                                            $pending_fees[] = $val['pending_fees'];
                                        }
                                        echo number_format(array_sum($total_fees));
                                    
                                    }else{
                                        
                                    }
                                    
                                    
                                    
                                    
                                    ?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($fees_received); }else{ echo "0"; }?></td>
                                    <td><?php if(!empty($res)){ echo array_sum($pending_fees); }else{ echo "0"; } ?></td>
                                   
                                </tr>
                                
                                
                                  
                                </tbody>
                           </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
        
        
        
    </div> <!-- container-fluid -->
</div>

<?php $this->load->view('footd');?>

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
      
      setTimeout(function() {
                    window.location.href = '<?php echo base_url('dashboard/addpackage')?>';
       }, 2000);

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
</script>
