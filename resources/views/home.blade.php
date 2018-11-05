<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <!-- Bootstrap CSS -->
        <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="test1.css"> -->



   
    </head>
    <br><br><br><br>
   
    <body>
       <div class="container">     

            <div class="col-md-12">
                {!! Form::open(array('route' => 'get_qr_details', 'class' => 'form')) !!}
                <!--  <form class="form" route="stored_fastag_details"> -->
                <div class="col-md-8">

                    <div class="panel with-nav-tabs panel-primary" >
                        <div class="panel-heading">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab_url" onclick="tab_url1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">URL</a></li>
                                <li ><a href="#tab_text" onclick="tab_text1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">Text</a></li>
                                <li><a href="#tab_email" onclick="tab_email1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">E-Mail</a></li>
                                <li><a href="#tab_call" onclick="tab_call1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">Call</a></li>
                                <li><a href="#tab_sms" onclick="tab_sms1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">SMS</a></li>
                                <li><a href="#tab_google_map" onclick="tab_google_map1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">Google Map</a></li>
                                <li><a href="#wifi" onclick="wifi1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">WI-FI</a></li>
                                <li><a href="#vcard" onclick="vcard1()" class="p-3 mb-2 bg-info text-white" data-toggle="tab">VCard</a></li>
                            </ul>
                        </div>
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab_url">
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Website (URL)</label></div>
                                            

                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="url" value="<?php if (isset($data['url'])) { echo($data['url']); }  ?>" class="url form-control input-mini" placeholder="https://www.example.com">                       
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="tab_text">
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Message:</label></div>
                                            

                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <textarea name="qr_text" rows="4" cols="50" class="text" placeholder="Enter your text here"><?php if (isset($data['qr_text'])) { echo htmlspecialchars($data['qr_text']);}?></textarea>                     
                            </div>
                        </div>                      
                </div>
                <div class="tab-pane fade" id="tab_email">
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Email:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="email_email" value="<?php if (isset($data['email_email'])) { echo($data['email_email']); }  ?>" class="email form-control input-mini" placeholder="example@gmail.com">                   
                            </div>
                        </div><br>
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Subject:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="email_subject" value="<?php if (isset($data['email_subject'])) { echo ($data['email_subject']); }  ?>" class="email form-control input-mini" placeholder="Product Request">                   
                            </div>
                        </div><br>
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Message:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <textarea name="email_message" rows="4" cols="50" class="email" placeholder="Please send me more information about..."><?php if (isset($data['email_message'])) { echo htmlspecialchars($data['email_message']);}?></textarea>                   
                            </div>
                        </div>                      
                </div>
                <div class="tab-pane fade" id="tab_call">
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Phone Number</label></div>
                                            

                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="call_phone_number" value="<?php if (isset($data['call_phone_number'])) { echo($data['call_phone_number']); }  ?>" class="call form-control input-mini" placeholder="Phone Number">                       
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="tab_sms">
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">number:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="sms_number" value="<?php if (isset($data['sms_number'])) { echo($data['sms_number']); }  ?>" class="sms form-control input-mini" placeholder="Your Number">                   
                            </div>
                        </div><br>
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Message:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <textarea name="sms_message" rows="4" cols="50" class="sms" placeholder="Enter your text here..."><?php if (isset($data['sms_message'])) { echo htmlspecialchars($data['sms_message']);}?></textarea>                   
                            </div>
                        </div>                      
                </div>
                <div class="tab-pane fade" id="tab_google_map">
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Latitude:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input  name="google_map_lat" value="<?php if (isset($data['google_map_lat'])) { echo($data['google_map_lat']); }  ?>" class="geo form-control input-mini" placeholder="0.000000">                   
                            </div>
                        </div><br>
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Longitude:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input  name="google_map_long" value="<?php if (isset($data['google_map_long'])) { echo($data['google_map_long']); }  ?>" class="geo form-control input-mini" placeholder="0.000000">                  
                            </div>
                        </div>                      
                </div>
                <div class="tab-pane fade" id="wifi">
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">WI-FI Name:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="wifi_name" value="<?php if (isset($data['wifi_name'])) { echo($data['wifi_name']); }  ?>" class="wifi form-control input-mini" placeholder="Network Name">                   
                            </div>
                        </div><br>
                        <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">WI-FI Password:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="wifi_password" value="<?php if (isset($data['wifi_password'])) { echo($data['wifi_password']); }  ?>" class="wifi form-control input-mini" placeholder="Network Password">                  
                            </div>
                        </div>                      
                </div>
                <div class="tab-pane fade" id="vcard">
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Your Name:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_full_name" value="<?php if (isset($data['vcard_full_name'])) { echo($data['vcard_full_name']); }  ?>" class="vcard form-control input-mini" placeholder="Full Name">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Company Name:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_company_name" value="<?php if (isset($data['vcard_company_name'])) { echo($data['vcard_company_name']); }  ?>" class="vcard form-control input-mini" placeholder="Company Name">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Mobile Number:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_mbl_nbr" value="<?php if (isset($data['vcard_mbl_nbr'])) { echo($data['vcard_mbl_nbr']); }  ?>" class="vcard form-control input-mini" placeholder="Mobile Number">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label"> Land Line Number:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">  
                                <input type="text" name="vcard_landline" value="<?php if (isset($data['vcard_landline'])) { echo($data['vcard_landline']); }  ?>" class="vcard form-control input-mini" placeholder="Landline number">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Email:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_email" value="<?php if (isset($data['vcard_email'])) { echo($data['vcard_email']); }  ?>" class="vcard form-control input-mini" placeholder="email">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Street:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_street" value="<?php if (isset($data['vcard_street'])) { echo($data['vcard_street']); }  ?>" class="vcard form-control input-mini" placeholder="Street">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">City:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_city" value="<?php if (isset($data['vcard_city'])) { echo($data['vcard_city']); }  ?>" class="vcard form-control input-mini" placeholder="City">                      
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <input type="text" name="vcard_pincode" value="<?php if (isset($data['vcard_pincode'])) { echo($data['vcard_pincode']); }  ?>" class="vcard form-control input-mini" placeholder="PINCODE">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">State:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" value="<?php if (isset($data['vcard_state'])) { echo($data['vcard_state']); }  ?>" name="vcard_state" class="vcard form-control input-mini" placeholder="State">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Country:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_country" value="<?php if (isset($data['vcard_country'])) { echo($data['vcard_country']); }  ?>" class="vcard form-control input-mini" placeholder="Country Name">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Website:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input type="text" name="vcard_url" value="<?php if (isset($data['vcard_url'])) { echo($data['vcard_url']); }  ?>" class="vcard form-control input-mini" placeholder="www.example.com">                      
                            </div>
                    </div><br>
                    <div class="row span12"> 
                            <div class="col-lg-3"><label class="control-label">Image uploads:</label></div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <input name="image" type="file" id="image">
                            </div>
                    </div><br>



                </div>




            </div>
        </div>
    </div>





                        <div class="col-xs-12 col-md-5 col-sm-6 col-md-offset-3">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg"> 
                        </div>
                </div>



                    <div class="col-md-4">

                    <?php   
                      

                        if (isset($data['url'])&&!empty($data['url'])) {      
                        echo "<b>Website URL: </b>".$data['url'];
                        echo "<br>";
                        $png = QrCode::format('png')->color(150,90,10)->size(212)->generate($data['url']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        }
                        
                        elseif (isset($data['qr_text'])&&!empty($data['qr_text'])) {
                        echo "<b>Text: </b>".$data['qr_text'];
                        echo "<br>";
                        $png = QrCode::format('png')->size(212)->generate($data['qr_text']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }

                        elseif (isset($data['email_email'])&&!empty($data['email_email'])) {
                        echo "<b>Email: </b>".$data['email_email'];
                        echo "<br>";
                        echo "<b>Email Subject: </b>".$data['email_subject'];
                        echo "<br>";
                        echo "<b>Email Message: </b>".$data['email_message'];
                        echo "<br>";
                        $png = QrCode::format('png')->size(212)->email($data['email_email'],$data['email_subject'],$data['email_message']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }
                        elseif (isset($data['call_phone_number'])&&!empty($data['call_phone_number'])) {
                        echo "<b>Phone Number: </b>".$data['call_phone_number'];
                        echo "<br>";
                        $png = QrCode::format('png')->size(212)->phoneNumber($data['call_phone_number']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }
                        elseif (isset($data['sms_number'])&&!empty($data['sms_number'])) {
                        echo "<b>SMS Number: </b>".$data['sms_number'];
                        echo "<br>";
                        echo "<b>SMS Message: </b>".$data['sms_message'];
                        echo "<br>";
                        $png = QrCode::format('png')->size(212)->sms($data['sms_number'],$data['sms_message']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }

                        elseif (isset($data['google_map_lat'])&&!empty($data['google_map_lat'])) {
                        echo "<b>Latitude: </b>".$data['google_map_lat'];
                        echo "<br>";
                        echo "<b>Longitude: </b>".$data['google_map_long'];
                        echo "<br>";
                        $png = QrCode::format('png')->size(212)->geo($data['google_map_lat'],$data['google_map_long']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }

                        elseif (isset($data['wifi_name'])&&!empty($data['wifi_name'])) {
                        echo "<b>WI-FI Name: </b>".$data['wifi_name'];
                        echo "<br>";
                        echo "<b>WI-FI Password: </b>".$data['wifi_password'];
                        echo "<br>";
                        $png = QrCode::format('png')->size(212)->wiFi([
                                'ssid' => $data['wifi_name'],
                                //'ssid' => 'Bfree-Linksys',
                                'encryption' => 'WPA',
                                'password' => $data['wifi_password']
                                ]);
                        //QrCode::format('png')->size(212)->geo($data['google_map_lat'],$data['google_map_long']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }

                        elseif (isset($data['vcard_full_name'])&&!empty($data['vcard_full_name'])) {
                        echo "<br>";
                        $png = QrCode::format('png')->size(300)->merge('/public/uploads/bfree1.png')->encoding('UTF-8')
            ->generate("BEGIN:VCARD
VERSION:2.1
N:Gump;Forrest;;Mr.
FN:".$data['vcard_full_name']."
ORG:".$data['vcard_company_name']."
TEL;WORK;VOICE:".$data['vcard_mbl_nbr']."
TEL;HOME;VOICE:".$data['vcard_landline']."
ADR;WORK;PREF:;;".$data['vcard_street'].";".$data['vcard_city'].";".$data['vcard_pincode'].";".$data['vcard_state'].";".$data['vcard_country']."
EMAIL:".$data['vcard_email']."
URL:".$data['vcard_url']."
END:VCARD");
                        //QrCode::format('png')->size(212)->geo($data['google_map_lat'],$data['google_map_long']);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
                        echo "<br>";
                        echo "Download QR Code <a href='data:image/png;base64," . $png . "' download><b>PNG</b></a>";
                        
                            }


                       
                        
                    //QrCode::size(300)->format('png')->generate('sms:'.$url.':Hi', 'uploads/'.$url.'.png');                        
                        //echo QrCode::size(200)->generate('Make me into a QrCode!', 'uploads/abc.jpg'); 
                        // echo $url;
                        // $qr_code= QrCode::size(200)->SMS($url,'Body of the message');
                        // echo $qr_code;
                        
                        ?>
                       <!--  <img src="uploads/test.png" width="150" height="150">
                       <a href="uploads/test.png" download>JPG</a> -->
                        
                   </div>




            </div>
        </div>

<script type="text/javascript">
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }   
}); 
    

            function tab_url1() {
               $('.text').val('');
               $('.email').val('');
               $('.call').val('');
               $('.sms').val('');
               $('.geo').val('');
               $('.wifi').val('');
               $('.vcard').val('');

                }
            function tab_text1() {
               $('.url').val('');
               $('.email').val('');
               $('.call').val('');
               $('.sms').val('');
               $('.geo').val('');
               $('.wifi').val('');
               $('.vcard').val('');
            }
            function tab_email1() {
               $('.url').val('');
               $('.text').val('');
               $('.call').val('');
               $('.sms').val('');
               $('.geo').val('');
               $('.wifi').val('');
               $('.vcard').val('');
            }
            function tab_call1() {
               $('.url').val('');
               $('.text').val('');
               $('.email').val('');
               $('.sms').val('');
               $('.geo').val('');
               $('.wifi').val('');
               $('.vcard').val('');
            }
            function tab_sms1() {
               $('.url').val('');
               $('.text').val('');
               $('.email').val('');
               $('.call').val('');
               $('.geo').val('');
               $('.wifi').val('');
               $('.vcard').val('');
            }
            function tab_google_map1() {
               $('.url').val('');
               $('.text').val('');
               $('.email').val('');
               $('.call').val('');
               $('.sms').val('');
               $('.wifi').val('');
               $('.vcard').val('');
            }
            function wifi1() {
               $('.url').val('');
               $('.text').val('');
               $('.email').val('');
               $('.call').val('');
               $('.sms').val('');
               $('.geo').val('');
               $('.vcard').val('');
            }
            function vcard1() {
               $('.url').val('');
               $('.text').val('');
               $('.email').val('');
               $('.call').val('');
               $('.sms').val('');
               $('.geo').val('');
               $('.wifi').val('');
            }
</script>

                   
         



    </body> 
</html>         