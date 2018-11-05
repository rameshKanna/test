<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
 

   
    </head>
    <br><br><br><br>
   
    <body>
        <div class="container">
           {!! Form::open(array('route' => 'fastag_app_stored_details', 'class' => 'form')) !!}
         <!--  <form class="form" route="stored_fastag_details"> -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Fastag Details</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> FASTag Application Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="fastag_no" class="form-control input-mini" placeholder="FASTag Application Number">                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Applicant Name</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="customer_name" class="form-control input-mini" placeholder="Enter Customer Name">                       
                                            </div>
                                        </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Date of Birth</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" class="date form-control" name="dob"  placeholder="DD-MM-YYYY" required>                       
                                        </div>
                                    </div><br>

                                    <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> PAN Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="pan" minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter PAN Number">                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Aadhaar Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="aadhaar" minlength="12" maxlength="12" class="form-control input-mini" placeholder="Enter Aadhaar Number">                       
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Mobile Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="mobile_number"  minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter Mobile Number" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Vehicle Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="vehicle_number"  class="form-control input-mini" placeholder="Enter Vehicle Number" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Vehicle Class</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="vehicle_class" class="form-control input-mini" placeholder="Enter Vehicle Class" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Issuing Bank</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="bank" class="form-control input-mini" placeholder="EQUITAS" DISABLED>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Tag Id</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="tag_id" class="form-control input-mini" placeholder="Tag Id" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Tag Cost</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="tag_cost" class="form-control input-mini" placeholder="Tag Cost" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Security Deposit</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="security_deposit" class="form-control input-mini" placeholder="Security Deposit" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Commercial </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <label class="radio-inline">
                                            <input type="radio" name="commercial" value="yes">Yes</label> 
                                            <label class="radio-inline">
                                            <input type="radio" name="commercial" value="no">No</label>
                                                               
                                        </div>
                                    </div><br>
                                        <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Minumum Balance</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="min_bal" class="form-control input-mini" placeholder="Min Bal Amount">                       
                                        </div>
                                    </div><br>                                        

                                     <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Convenience Fee </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="con_fee" class="form-control input-mini" placeholder="Convenience Fee">                       
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Recharge Amount </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="recharge_amount" class="form-control input-mini" placeholder="Recharge Amount">                       
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Total Cost </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="total_cost" class="form-control input-mini" placeholder="Total Cost">                       
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Documents  </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                        <select class="form-control" type="text" name="documents" required id="documents" class="selectpicker" data-width="90%">
                                              <option >Select Document Proof </option> 
                                              <option value='rc'>RC</option>  
                                              <option value='insurance'>Insurance</option>  
                                              <option value='dl'>Driving License</option>
                                              <option value='aadhaar_card'>Aadhaar Card</option>  
                                              <option value='pan_card'>PAN Card</option>    
                                              
                                        </select>
                                        </div>
                                        <div class="col-lg-2"><label class="control-label">Pass Category</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                        <select class="form-control" type="text" name="pass_category" required id="address_proof" class="selectpicker" data-width="90%">
                                              <option >Select Pass Category </option> 
                                              <option value='local_pass1'>Local Pass 1</option>  
                                              <option value='local_pass2'>Local Pass 1</option>  
                                              <option value='school_pass'>School/ College Pass</option>
                                              <option value='general_pass'>General Pass</option>  
                                              <option value='none'>None</option>    
                                              
                                        </select>
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Tag Activation Date</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" class="date form-control" name="activation_date"  placeholder="DD-MM-YYYY" required>                       
                                        </div>
                                    </div><br>
                                    
                                    
                            </div>
                        </div>                        
                    </div>
                    </div>

                                <div class="row">  
                                    <div class="col-xs-12 col-md-5 col-sm-6 col-md-offset-5">
                                    <input type="submit" name="submit" value="Download Application" class="btn btn-success btn-lg"> 
                                </div>
     </form>

    </div>

<script type="text/javascript">


    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     }); 
 
</script> 
         



    </body>
</html>