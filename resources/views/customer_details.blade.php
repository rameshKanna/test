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
           {!! Form::open(array('route' => 'stored_fastag_details', 'class' => 'form')) !!}
         <!--  <form class="form" route="stored_fastag_details"> -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Fastag Details</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                    <!-- <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label">Corporate Name </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="corporate_name" class="form-control input-mini" placeholder="Corporate Name" required>                       
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label">Type of Company</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <select class="form-control" type="text" name="type_of_company" required id="type_of_company" class="selectpicker" data-width="90%">
                                              <option >Select Type of Company </option>    
                                              <option value=''>Private Ltd</option>
                                              <option value=''>Partnership</option> 
                                              <option value=''>Public Ltd</option>    
                                              <option value=''>Proprietorship</option>    
                                              
                                        </select>
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Date of Incorporation </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="date_of_incorporation" class="form-control input-mini" placeholder=" Date of Incorporation" required>                       
                                        </div>
                                    </div><br> -->
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Customer Name </label>
                                        </div>

                                        <div class="col-xs-4 col-sm-6 col-md-3">
                                        <input type="text" name="last_name" class="form-control input-mini" placeholder="Last Name" required>                       
                                        </div>
                                        <div class="col-xs-4 col-sm-6 col-md-3">
                                        <input type="text" name="first_name" class="form-control input-mini" placeholder="First Name" required>                       
                                        </div>
                                        <div class="col-xs-4 col-sm-6 col-md-2">
                                        <input type="text" name="middle_name" class="form-control input-mini" placeholder="Middle Name">                       
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Gender </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <label class="radio-inline">
                                            <input type="radio" name="gender" value="Male">Male</label> 
                                            <label class="radio-inline">
                                            <input type="radio" name="gender" value="Female">Female</label>
                    
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Date of Birth</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" class="date form-control" name="DOB"  placeholder="DD-MM-YYYY" required>                       
                                        </div>
                                    </div><br>

                                    <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Email</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="email" class="form-control input-mini" placeholder="Email ID">                       
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Mobile Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="mobile_number"  minlength="10" maxlength="10" class="form-control input-mini" placeholder=" Mobile Number" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Martial Status </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <label class="radio-inline">
                                            <input type="radio" name="martial_status" value="Married">Married</label> 
                                            <label class="radio-inline">
                                            <input type="radio" name="martial_status" value="Unmarried">Unmarried</label>
                                            <label class="radio-inline">
                                            <input type="radio" name="martial_status" value="others">Others</label>
                    
                                        </div>
                                    </div><br>
                                        <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Father's Name </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="father_name" class="form-control input-mini" placeholder="Father's Name">                       
                                        </div>
                                    </div><br>                                        

                                     <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Mother's Name </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="mother_name" class="form-control input-mini" placeholder="Mother's Name">                       
                                        </div>
                                    </div><br>
                                    
                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label"> Select your Bank </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                            <label class="radio-inline">
                                            <input type="radio" name="bank" value="ICICI">ICICI</label> 
                                            <label class="radio-inline">
                                            <input type="radio" name="bank" value="HDFC">HDFC</label>
                                            <label class="radio-inline">
                                            <input type="radio" name="bank" value="SBI">SBI</label>
                                            <label class="radio-inline">
                                            <input type="radio" name="bank" value="EQUITAS">EQUITAS</label>
                                            <label class="radio-inline">
                                            <input type="radio" name="bank" value="AXIS">AXIS</label>
                    
                                        </div>
                                    </div><br>

                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label">Bank Account Number</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="bank_account_no" minlength="12" maxlength="14" class="form-control input-mini" placeholder="Bank Account Number" >                       
                                        </div>
                                    </div><br>

                                     <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label">Bank Customer ID </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8">
                                        <input type="text" name="bank_customer_id" minlength="9" maxlength="9" class="form-control input-mini" placeholder="Bank Customer ID">                       
                                        </div>
                                    </div><br>

                                    
                            </div>
                        </div>                        
                    </div>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Document Proofs</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">



                                    <div class="row span12"> 
                                        <div class="col-lg-3"><label class="control-label">Identity Proof</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                        <select class="form-control" type="text" id="id_proof" name="id_proof" required id="id_proof" data-width="90%">
                                              <option >Select ID Proof </option>    
                                              <option value='PAN Card'>PAN Card</option>
                                              <option value='Aadhaar Card'>Aadhaar Card</option> 
                                              <option value='Driving License'>Driving License</option>    
                                              <option value='Passport'>Passport</option>    
                                              <option value='Voter ID Card'>Voter ID Card</option>    
                                              <option value='NAREGA Job Card'>NAREGA Job Card</option>    
                                              
                                        </select>
                                        </div>
                               
                                        <div class="col-lg-2"><label class="control-label">Address Proof</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                        <select class="form-control" type="text" name="address_proof" required id="address_proof" class="selectpicker" data-width="90%">
                                              <option >Select Address Proof </option>    
                                              <option value='Aadhaar Card'>Aadhaar Card</option>
                                              <option value='Driving License'>Driving License</option> 
                                              <option value='Passport'>Passport</option>    
                                              <option value='Voter ID Card'>Voter ID Card</option>
                                              <option value='NAREGA Job Card'>NAREGA Job Card</option>    
                                              
                                        </select>
                                        </div>
                                    </div><br>
                                    <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Proof of Identity Document Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="id_proof_number" minlength="12" maxlength="12" class="form-control input-mini" placeholder="ID Proof Number" required>                       
                                            </div>
                                        </div><br>
                                    <div style='display:none;' id='id_proof_expiry_date'>
                                    <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">ID Proof Expiry Date</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="id_proof_expiry_date" class="date form-control input-mini" placeholder="ID proof Expiry Date">                       
                                            </div>
                                        </div><br>
                                    </div>
                                    <!-- <div style='display:none;' id='id_proof_dl_expiry_date'>
                                    <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Driving License Expiry Date</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="dl_expiry_date" class="date form-control input-mini" placeholder="Driving License Expiry Date" required>                       
                                            </div>
                                        </div><br>
                                    </div> -->

                                         <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Address Proof Document Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="address_proof_number" minlength="12" maxlength="12" class="form-control input-mini" placeholder="Address Proof Number" required>                       
                                            </div>
                                        </div><br>
                                        <div style='display:none;' id='address_proof_expiry_date'>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Address Proof Expiry Date</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="address_proof_expiry_date" class="date form-control input-mini" placeholder="Address proof Expiry Date">                       
                                            </div>
                                        </div><br>
                                    </div>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Occupation Type</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" type="text" name="occupation_type" required class="selectpicker" data-width="90%">
                                                  <option >Select Occupation Type</option>    
                                                  <option value='S'>Service (Private Sector, Public Sector, Government Sector)</option>
                                                  <option value='O'>Others (Professional, Self Employed,Retired, Housewife, Student)</option> 
                                                  <option value='B'>Business</option>    
                                                  <option value='X'>Not categorized</option>                                                  
                                            </select>
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Residential Status</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" type="text" name="residential_status" required class="selectpicker" data-width="90%">
                                                  <option >Select Residential Status</option>    
                                                  <option value='A'>Resident Individual</option>
                                                  <option value='B'>NRI</option> 
                                                  <option value='C'>Foreign National</option>    
                                                  <option value='D'>Person of Indian Origin</option>                                                  
                                            </select>
                                            </div>
                                        </div><br>





                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Address Details</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                            <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label">Address Type</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" type="text" name="address_type" required class="selectpicker" data-width="90%">
                                                  <option >Select Address Type</option>    
                                                  <option value='A'>Residential/Business</option>
                                                  <option value='B'>Residential, Business</option> 
                                                  <option value='C'>Registered Office</option>    
                                                  <option value='D'>Unspecified</option>                                                  
                                            </select>
                                            </div>
                                        </div><br>

                                            <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label"> Flat/Door No. </label>
                                                </div>
                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text"   name="flatno" class="form-control" placeholder="Flat/Door Number">                                                
                                              </div>
                                          </div><br>
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label"> Premises/ Building/ Village </label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text"    name="premises" class="form-control" placeholder="Premises/ Building/ Village">                                                
                                              </div>
                                          </div><br>
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">Road/ Street/ Post Office</label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text" name="street"   class="form-control" placeholder="Road/Street/Post Office" required>                                                
                                              </div>
                                          </div><br>
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">Area/ Locality/ Taluka</label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text"  name="area"  class="form-control" placeholder="Area/Taluk #" required>                                                
                                              </div>
                                          </div><br>
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">Town/City/District</label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text"  required name="city"  class="form-control" placeholder="Town/District">                                                
                                              </div>
                                          </div><br>
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">State</label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text"  required name="state" class="form-control" placeholder="State">                                                
                                              </div>
                                            </div><br>
                                            <!-- <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">Country</label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text"  required name="country" class="form-control" placeholder="Country">                                                
                                              </div>
                                            </div><br>
                                                -->
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">Country </label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">
                                                <input type="text" name="country" class="form-control" placeholder="INDIA"
                                                        value="INDIA" disabled >
                                              </div>
                                          </div><br>
                                          <div class="row"> 
                                              <div class="col-lg-3"><label class="control-label">Pincode</label>
                                                </div>

                                              <div class="col-xs-12 col-sm-12 col-md-8">                                                
                                                <input type="text" pattern="^[0-9]{6,}$" maxlength="6" data-minlength="6"  name="pin" class="form-control" placeholder="PINCODE" required>                                                                               
                                              </div>
                                          </div><br>                                          

                                </div>
                                </div>
                            </div>
                        </div>

                        






                                <div class="row">  
                                    <div class="col-xs-12 col-md-5 col-sm-6 col-md-offset-5">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg"> 
                                </div>
     </form>

    </div>

<script type="text/javascript">


    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     }); 

    $(document).ready(function(){
    $('#id_proof').on('change', function() {
      if ((this.value == 'Passport') || (this.value == 'Driving License'))
      
      {
        $("#id_proof_expiry_date").show();
        $("#id_proof_expiry_date").attr("required",true);
      }
      else
      {
        $("#id_proof_expiry_date").hide();

      }
    });
    $('#address_proof').on('change', function() {
      if ((this.value == 'Passport') || (this.value == 'Driving License'))
     
      {
        $("#address_proof_expiry_date").show();
        $("#address_proof_expiry_date").attr("required",true);
      }
      else
      {
        $("#address_proof_expiry_date").hide();
      }
    });
});

     
</script> 
         



    </body>
</html>