<?php   
	namespace App\Http\Controllers;

	use Illuminate\Routing\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;


	use App\Http\Requests;
	

	class FastagController extends Controller
	{
	    public function index()
	    {
	    	return 'hello';
	    }
	  public function fastag_details()
	    {
	    	return view('customer_details');
	    }

	    public function stored_details(Request $request)
	    {

	    	 $last_name = $request->input('last_name');
	    	 $first_name = $request->input('first_name');
	    	 $middle_name = $request->input('middle_name');
	    	 $gender = $request->input('gender');
	    	 $DOB = $request->input('DOB');
	    	 $mother_name = $request->input('mother_name');
	    	 $father_name = $request->input('father_name');
	    	 $martial_status = $request->input('martial_status');
	    	 $bank = $request->input('bank');
	    	 $bank_account_no = $request->input('bank_account_no');
	    	 $bank_customer_id = $request->input('bank_customer_id');
	    	 $address_type = $request->input('address_type');
	    	 $flatno = $request->input('flatno');
	    	 $premises = $request->input('premises');
	    	 $street = $request->input('street');
	    	 $area = $request->input('area');
	    	 $city = $request->input('city');
	    	 $state = $request->input('state');
	    	 //$country = $request->input('country');
	    	 $pin = $request->input('pin');
	    	 $email = $request->input('email');
	    	 $mobile_number = $request->input('mobile_number');
	    	 $id_proof = $request->input('id_proof');
	    	 $address_proof = $request->input('address_proof');
	    	 $id_proof_number = $request->input('id_proof_number');
	    	 $id_proof_expiry_date = $request->input('id_proof_expiry_date');
	    	 $address_proof_number = $request->input('address_proof_number');
	    	 $address_proof_expiry_date = $request->input('address_proof_expiry_date');
	    	 $occupation_type = $request->input('occupation_type');
	    	 $residential_status = $request->input('residential_status');
	    	 //dd($name,$email,$status);
	    	 // dd($email);
	    	 // dd($status);
	    	 DB::insert('insert into fastag_list (last_name,first_name,middle_name,gender,DOB,mother_name,father_name,martial_status,bank,bank_account_no,bank_customer_id,address_type,flatno,premises,street,area,city,state,pin,email,mobile_number,id_proof,address_proof,id_proof_number,id_proof_expiry_date,address_proof_number,address_proof_expiry_date,occupation_type,residential_status) 
	    	 	values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
			[$last_name,$first_name,$middle_name,$gender,$DOB,$mother_name,$father_name,$martial_status,$bank,$bank_account_no,$bank_customer_id,$address_type,$flatno,$premises,$street,$area,$city,$state,$pin,$email,$mobile_number,$id_proof,$address_proof,$id_proof_number,$id_proof_expiry_date,$address_proof_number,$address_proof_expiry_date,$occupation_type,$residential_status]);
        	//DB::insert("insert into bf_sample (name,email,status) values ([$name], [$email], [$status])");
        	//DB::insert('insert into bf_sample (name,email,status) values (?),(?),(?) ($name, $email, $status)');
      		// echo "Record inserted successfully.<br/>";
      		//echo '<a href = "public/insert_form_details">Click Here</a> to go back.';
	    	//return 'successfully inserted';
	    	 switch($bank){
	    	 	case "ICICI":

      			$pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/FASTag Application Form_1.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5);
                //$records = DB::table('fastag_list')->get();
               //print_R($records);
               
			        $customer_name=$last_name.'  '.$first_name.'  '.$middle_name;
			    	$customer_name_len=strlen($customer_name);
				    $x=47.6; $y=97.5; $start=0; 
				    do
				    {
				        $customer_name1=substr($customer_name,$start,1);
				        $pdf->text($x, $y, $customer_name1);
				        $x=$x+3.41; $start=$start+1;
				    }while($customer_name_len>$start);




				    $date_of_birth = str_replace('-', ' ', $DOB);
				    //print_r($date_of_birth);
				    $dob_len=strlen($date_of_birth);
				    $x=156.7; $y=104; $start=0; 
				    do
				    {
				        $date_of_birth1=substr($date_of_birth,$start,1);
				        $pdf->text($x, $y, $date_of_birth1);
				        $x=$x+3.36; $start=$start+1;
				    }while($dob_len>$start);


			    	$mother_name_len=strlen($mother_name);
				    $x=47.6; $y=109.5; $start=0; 
				    do
				    {
				        $mother_name1=substr($mother_name,$start,1);
				        $pdf->text($x, $y, $mother_name1);
				        $x=$x+3.41; $start=$start+1;
				    }while($mother_name_len>$start);

				    $bank_account_no_len=strlen($bank_account_no);
				    $x=47.6; $y=119.7; $start=0; 
				    do
				    {
				        $bank_account_no1=substr($bank_account_no,$start,1);
				        $pdf->text($x, $y, $bank_account_no1);
				        $x=$x+3.41; $start=$start+1;
				    }while($bank_account_no_len>$start);

				    $bank_customer_id_len=strlen($bank_customer_id);
				    $x=158.6; $y=119.7; $start=0; 
				    do
				    {
				        $bank_customer_id1=substr($bank_customer_id,$start,1);
				        $pdf->text($x, $y, $bank_customer_id1);
				        $x=$x+3.41; $start=$start+1;
				    }while($bank_customer_id_len>$start);

				    $city_len=strlen($city);
				    $x=47.6; $y=144.7; $start=0; 
				    do
				    {
				        $city1=substr($city,$start,1);
				        $pdf->text($x, $y, $city1);
				        $x=$x+3.41; $start=$start+1;
				    }while($city_len>$start);

				    $state_len=strlen($state);
				    $x=127.6; $y=144.7; $start=0; 
				    do
				    {
				        $state1=substr($state,$start,1);
				        $pdf->text($x, $y, $state1);
				        $x=$x+3.41; $start=$start+1;
				    }while($state_len>$start);

				    $pin_len=strlen($pin);
				    $x=78.5; $y=149.5; $start=0; 
				    do
				    {
				        $pin1=substr($pin,$start,1);
				        $pdf->text($x, $y, $pin1);
				        $x=$x+3.41; $start=$start+1;
				    }while($pin_len>$start);

				     $mobile_number_len=strlen($mobile_number);
				    $x=128; $y=150; $start=0; 
				    do
				    {
				        $mobile_number1=substr($mobile_number,$start,1);
				        $pdf->text($x, $y, $mobile_number1);
				        $x=$x+3.41; $start=$start+1;
				    }while($mobile_number_len>$start);


				    $email_len=strlen($email);
				    $x=47.6; $y=155; $start=0; 
				    do
				    {
				        $email1=substr($email,$start,1);
				        $pdf->text($x, $y, $email1);
				        $x=$x+3.41; $start=$start+1;
				    }while($email_len>$start);

				    $id_proof_number_len=strlen($id_proof_number);
				    $x=65; $y=238; $start=0; 
				    do
				    {
				        $id_proof_number1=substr($id_proof_number,$start,1);
				        $pdf->text($x, $y, $id_proof_number1);
				        $x=$x+3.41; $start=$start+1;
				    }while($id_proof_number_len>$start);

				    $address_proof_number_len=strlen($address_proof_number);
				    $x=145; $y=238; $start=0; 
				    do
				    {
				        $address_proof_number1=substr($address_proof_number,$start,1);
				        $pdf->text($x, $y, $address_proof_number1);
				        $x=$x+3.41; $start=$start+1;
				    }while($address_proof_number_len>$start);



				    $address_line1= $flatno.','.$premises;
				    $address_line1_len=strlen($address_line1);
				    $x=47.6; $y=135.8; $start=0; 
				    do
				    {
				        $address_line11=substr($address_line1,$start,1);
				        $pdf->text($x, $y, $address_line11);
				        $x=$x+3.41; $start=$start+1;
				    }while($address_line1_len>$start);				   
				    

                    

                     $address_line2=$street.','.$area;
                     $address_line2_len=strlen($address_line2);
				    $x=47.6; $y=139.5; $start=0; 
				    do
				    {
				        $address_line22=substr($address_line2,$start,1);
				        $pdf->text($x, $y, $address_line22);
				        $x=$x+3.41; $start=$start+1;
				    }while($address_line2_len>$start);



                    $pdf->SetFont('ZapfDingbats','', 6);
                    $pdf->text(67, 70.5, '4');
                    if($gender=='Male'){
                    	$pdf->text(52, 105.2, '4');
                    }else{

                    	$pdf->text(63.7, 105.2, '4');
                    }

                    if($id_proof=='Driving License'){
                    	$pdf->text(27.5, 229.1, '4');
                    }elseif($id_proof=='PAN Card' ){
                    	$pdf->text(73.5, 229.1, '4');
                    }elseif($id_proof=='Passport' ){
                    	$pdf->text(118, 229.1, '4');
                    }elseif($id_proof=='Voter ID Card' ){
                    	$pdf->text(152, 229.1, '4');
                    }else{
                    	 $pdf->text(27.5, 233, '4');
                    }

                    if($address_proof=='Driving License'){
                    	$pdf->text(27.5, 229.1, '4');
                    }elseif($address_proof=='Passport' ){
                    	$pdf->text(118, 229.1, '4');
                    }elseif($address_proof=='Voter ID Card' ){
                    	$pdf->text(152, 229.1, '4');
                    }else{
                    	 $pdf->text(27.5, 233, '4');
                    }
                  break;

                case "HDFC":


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/HDFC-fastag-application.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);

                

                	$customer_name=$last_name.'  '.$first_name.'  '.$middle_name;
			    	$customer_name_len=strlen($customer_name);
				    $x=37; $y=115.3; $start=0; 
				    do
				    {
				        $customer_name1=substr($customer_name,$start,1);
				        $pdf->text($x, $y, $customer_name1);
				        $x=$x+3.8; $start=$start+1;
				    }while($customer_name_len>$start);


				    $date_of_birth = str_replace('-', ' ', $DOB);
				    //print_r($date_of_birth);
				    $dob_len=strlen($date_of_birth);
				    $x=168.5; $y=127.2; $start=0; 
				    do
				    {
				        $date_of_birth1=substr($date_of_birth,$start,1);
				        $pdf->text($x, $y, $date_of_birth1);
				        $x=$x+3.67; $start=$start+1;
				    }while($dob_len>$start);


			    	
				    $bank_account_no_len=strlen($bank_account_no);
				    $x=52; $y=136.7; $start=0; 
				    do
				    {
				        $bank_account_no1=substr($bank_account_no,$start,1);
				        $pdf->text($x, $y, $bank_account_no1);
				        $x=$x+3.9; $start=$start+1;
				    }while($bank_account_no_len>$start);

				    $bank_customer_id_len=strlen($bank_customer_id);
				    $x=169.5; $y=136.7; $start=0; 
				    do
				    {
				        $bank_customer_id1=substr($bank_customer_id,$start,1);
				        $pdf->text($x, $y, $bank_customer_id1);
				        $x=$x+3.8; $start=$start+1;
				    }while($bank_customer_id_len>$start);


				    $address_line1= $flatno.','.$premises;
				    $address_line1_len=strlen($address_line1);
				    $x=37; $y=160; $start=0; 
				    do
				    {
				        $address_line11=substr($address_line1,$start,1);
				        $pdf->text($x, $y, $address_line11);
				        $x=$x+3.8; $start=$start+1;
				    }while($address_line1_len>$start);                    

                     $address_line2=$street.','.$area;
                     $address_line2_len=strlen($address_line2);
				    $x=37; $y=166.4; $start=0; 
				    do
				    {
				        $address_line22=substr($address_line2,$start,1);
				        $pdf->text($x, $y, $address_line22);
				        $x=$x+3.8; $start=$start+1;
				    }while($address_line2_len>$start);

				    $city_len=strlen($city);
				    $x=37; $y=172.5; $start=0; 
				    do
				    {
				        $city1=substr($city,$start,1);
				        $pdf->text($x, $y, $city1);
				        $x=$x+3.8; $start=$start+1;
				    }while($city_len>$start);

				    $state_len=strlen($state);
				    $x=132; $y=172.5; $start=0; 
				    do
				    {
				        $state1=substr($state,$start,1);
				        $pdf->text($x, $y, $state1);
				        $x=$x+3.8; $start=$start+1;
				    }while($state_len>$start);

				    $pin_len=strlen($pin);
				    $x=75; $y=178.2; $start=0; 
				    do
				    {
				        $pin1=substr($pin,$start,1);
				        $pdf->text($x, $y, $pin1);
				        $x=$x+3.8; $start=$start+1;
				    }while($pin_len>$start);

				     $mobile_number_len=strlen($mobile_number);
				    $x=132; $y=178.2; $start=0; 
				    do
				    {
				        $mobile_number1=substr($mobile_number,$start,1);
				        $pdf->text($x, $y, $mobile_number1);
				        $x=$x+3.8; $start=$start+1;
				    }while($mobile_number_len>$start);


				    $email_len=strlen($email);
				    $x=37; $y=184.4; $start=0; 
				    do
				    {
				        $email1=substr($email,$start,1);
				        $pdf->text($x, $y, $email1);
				        $x=$x+3.8; $start=$start+1;
				    }while($email_len>$start);

				    $id_proof_number_len=strlen($id_proof_number);
				    $x=59; $y=230.8; $start=0; 
				    do
				    {
				        $id_proof_number1=substr($id_proof_number,$start,1);
				        $pdf->text($x, $y, $id_proof_number1);
				        $x=$x+3.8; $start=$start+1;
				    }while($id_proof_number_len>$start);

				    $address_proof_number_len=strlen($address_proof_number);
				    $x=158.5; $y=230.8; $start=0; 
				    do
				    {
				        $address_proof_number1=substr($address_proof_number,$start,1);
				        $pdf->text($x, $y, $address_proof_number1);
				        $x=$x+3.8; $start=$start+1;
				    }while($address_proof_number_len>$start);			    



                    $pdf->SetFont('ZapfDingbats','', 6);
                    if($gender=='Male'){
                    	$pdf->text(30, 127.2, '4');
                    }else{

                    	$pdf->text(48.5, 127.2, '4');
                    }

                    if($id_proof=='Driving License'){
                    	$pdf->text(14, 219.7, '4');
                    }elseif($id_proof=='PAN Card' ){
                    	$pdf->text(68.5, 219.7, '4');
                    }elseif($id_proof=='Passport' ){
                    	$pdf->text(120.5, 219.7, '4');
                    }elseif($id_proof=='Voter ID Card' ){
                    	$pdf->text(160.5, 219.7, '4');
                    }else{
                    	 $pdf->text(14, 224.5, '4');
                    }

                    if($address_proof=='Driving License'){
                    	$pdf->text(14, 219.7, '4');
                    }elseif($address_proof=='Passport' ){
                    	$pdf->text(120.5, 219.7, '4');
                    }elseif($address_proof=='Voter ID Card' ){
                    	$pdf->text(160.5, 219.7, '4');
                    }else{
                    	 $pdf->text(14, 224.5, '4');
                    }
                  break;


                  case "SBI":


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/SBI-FASTAG-APPLICATION.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5.5);

                $customer_name=$last_name.'  '.$first_name.'  '.$middle_name;
			    	$customer_name_len=strlen($customer_name);
				    $x=55.5; $y=97.8; $start=0; 
				    do
				    {
				        $customer_name1=substr($customer_name,$start,1);
				        $pdf->text($x, $y, $customer_name1);
				        $x=$x+6.8; $start=$start+1;
				    }while($customer_name_len>$start);

				    $father_name_len=strlen($father_name);
				    $x=55.5; $y=106.8; $start=0; 
				    do
				    {
				        $father_name1=substr($father_name,$start,1);
				        $pdf->text($x, $y, $father_name1);
				        $x=$x+6.8; $start=$start+1;
				    }while($father_name_len>$start);

				    $mother_name_len=strlen($mother_name);
				    $x=55.5; $y=109.8; $start=0;
				    do
				    {
				        $mother_name1=substr($mother_name,$start,1);
				        $pdf->text($x, $y, $mother_name1);
				        $x=$x+6.8; $start=$start+1;
				    }while($mother_name_len>$start);


				    $date_of_birth = str_replace('-', '', $DOB);
				    //print_r($date_of_birth);
				    $dob_len=strlen($date_of_birth);
				    $x=50.7; $y=116; $start=0; 
				    do
				    {
				        $date_of_birth1=substr($date_of_birth,$start,1);
				        $pdf->text($x, $y, $date_of_birth1);
				        $x=$x+5; $start=$start+1;
				    }while($dob_len>$start);

				    //address
				    $address1=$flatno.', '.$premises;
				    $pdf->text(32, 196.5, $address1);
				    $pdf->text(32, 199.5, $street);
				    $pdf->text(32, 202.9, $area);
				    $pdf->text(47, 205.9, $city);
				    $pdf->text(95, 205.9, $city);
				    $pdf->text(42, 208.9, $pin);




				    $pdf->SetFont('ZapfDingbats','', 6);
				    if($gender=='Male'){
                    	$pdf->text(60.5, 120.3, '4');
                    }else{
                    	$pdf->text(70.6, 120.3, '4');
                    }

                    if($martial_status=='Married'){
                    	$pdf->text(63, 123.7, '4');
                    }elseif($martial_status=='Unmarried'){
                    	$pdf->text(75, 123.7, '4');
                    }else{
                    	$pdf->text(85, 123.3, '4');
                    }

                    // if($country=='India'){
                    	
                    // 	$pdf->text(70.6, 126.8, '4');
                    // }else{
                    // 	$pdf->text(61, 126.8, '4');
                    // }
                    $pdf->text(61, 126.8, '4');//country - india
                    if($residential_status=='A'){
                    	$pdf->text(61, 130.5, '4');
                    }elseif($residential_status=='B'){
                    	$pdf->text(87.5, 130.5, '4');
                    }elseif($residential_status=='C'){
                    	$pdf->text(96.7, 130.5, '4');
                    }else{
                    	$pdf->text(120.3, 130.5, '4');
                    }

                    if($occupation_type=='S'){
                    	$pdf->text(61, 133.5, '4');
                    }elseif($occupation_type=='O'){
                    	$pdf->text(138.5, 133.5, '4');
                    }elseif($occupation_type=='B'){
                    	$pdf->text(59.5, 136.5, '4');
                    }else{
                    	$pdf->text(76, 136.5, '4');
                    }

                    if($id_proof=='Passport'){
                    	$pdf->text(49, 157.5, '4');
                    	$pdf->SetFont('helvetica', 'B', 5.5);
                    	$pdf->text(71, 159.3, $id_proof_number);
                    	$pdf->text(127, 159.3, $id_proof_expiry_date);
                    }elseif($id_proof=='Voter ID Card'){                    	
                    	$pdf->text(144, 157.5, '4');
                    	$pdf->SetFont('helvetica', 'B', 5.5);
                    	$pdf->text(161.7, 159.3, $id_proof_number);
                    }elseif($id_proof=='PAN Card'){
                    	$pdf->text(183, 157.5, '4');
                    	$pdf->SetFont('helvetica', 'B', 5.5);
                    	$pdf->text(59.5, 162.2, $id_proof_number);
                    }elseif($id_proof=='Driving License'){
                    	$pdf->text(82, 160.5, '4');
                    	$pdf->SetFont('helvetica', 'B', 5.5);
                    	$pdf->text(102.5, 162.2, $id_proof_number);
                    	$pdf->text(152.7, 162.2, $id_proof_expiry_date);
                    }elseif($id_proof=='Aadhaar Card'){
                    	$pdf->text(183, 160.5, '4');
                    	$pdf->SetFont('helvetica', 'B', 5.5);
                    	$pdf->text(65, 165.4, $id_proof_number);
                    }else{
                    	$pdf->text(95, 163.5, '4');
                    }
                    $pdf->SetFont('ZapfDingbats','', 6);

                    if($address_type=='A'){
                    	$pdf->text(49, 182.5, '4');
                    }elseif($address_type=='B'){
                    	$pdf->text(77, 182.5, '4');
                    }elseif($address_type=='C'){
                    	$pdf->text(106, 182.5, '4');
                    }else{
                    	$pdf->text(130, 182.5, '4');
                    }


                    if($address_proof=='Passport'){
                    	$pdf->text(49, 185.5, '4');
                    }elseif($address_proof=='Driving License'){
                    	$pdf->text(63.4, 185.5, '4');
                    }elseif($address_proof=='Aadhaar Card'){
                    	$pdf->text(86, 185.5, '4');
                    }elseif($address_proof=='Voter ID Card'){
                    	$pdf->text(107.5, 185.5, '4');
                    }else{
                    	$pdf->text(134, 185.5, '4');
                    }

                    $pdf->text(95, 215, '4');//same as address


                    $pdf->AddPage();
	                $pageCounter =2;
	                $tplIdx = $pdf->importPage($pageCounter);
	                $pdf->useTemplate($tplIdx, 0, 0, 210);
	                $pdf->SetFont('helvetica', 'B', 5.5);

	                $pdf->text(114, 21, $mobile_number);
	                $pdf->text(77, 24, $email); 


	                break; 

	               } 


				    
                 
            
            	
               $pdf->Output($first_name.'_FASTAG_'.$bank.'_Application'.'.pdf', 'D');     
               //return ("FASTAG PDF created");



	    }

	    	public function fastag_HDFC_form(){

	    		return view('HDFC_customer_details');

	    	}


	            public function fastag_pdf(){


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/FASTag Application Form_1.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5);
                $records = DB::table('fastag_list')->get();
               //print_R($records);
               foreach ($records as $record)
			    {
			        $customer_name=$record->last_name.'  '.$record->first_name.'  '.$record->middle_name;
			    	$customer_name_len=strlen($customer_name);
				    $x=47.6; $y=97.5; $start=0; 
				    do
				    {
				        $customer_name1=substr($customer_name,$start,1);
				        $pdf->text($x, $y, $customer_name1);
				        $x=$x+3.41; $start=$start+1;
				    }while($customer_name_len>$start);




				    $date_of_birth = str_replace('-', ' ', $record->DOB);
				    //print_r($date_of_birth);
				    $dob_len=strlen($date_of_birth);
				    $x=156.7; $y=104; $start=0; 
				    do
				    {
				        $date_of_birth1=substr($date_of_birth,$start,1);
				        $pdf->text($x, $y, $date_of_birth1);
				        $x=$x+3.36; $start=$start+1;
				    }while($dob_len>$start);


			    	$mother_name_len=strlen($record->mother_name);
				    $x=47.6; $y=109.5; $start=0; 
				    do
				    {
				        $mother_name=substr($record->mother_name,$start,1);
				        $pdf->text($x, $y, $mother_name);
				        $x=$x+3.41; $start=$start+1;
				    }while($mother_name_len>$start);

				    $bank_account_no_len=strlen($record->bank_account_no);
				    $x=47.6; $y=119.7; $start=0; 
				    do
				    {
				        $bank_account_no1=substr($record->bank_account_no,$start,1);
				        $pdf->text($x, $y, $bank_account_no1);
				        $x=$x+3.41; $start=$start+1;
				    }while($bank_account_no_len>$start);

				    $bank_customer_id_len=strlen($record->bank_customer_id);
				    $x=158.6; $y=119.7; $start=0; 
				    do
				    {
				        $bank_customer_id1=substr($record->bank_customer_id,$start,1);
				        $pdf->text($x, $y, $bank_customer_id1);
				        $x=$x+3.41; $start=$start+1;
				    }while($bank_customer_id_len>$start);

				    $city_len=strlen($record->city);
				    $x=47.6; $y=144.7; $start=0; 
				    do
				    {
				        $city1=substr($record->city,$start,1);
				        $pdf->text($x, $y, $city1);
				        $x=$x+3.41; $start=$start+1;
				    }while($city_len>$start);

				    $state_len=strlen($record->state);
				    $x=127.6; $y=144.7; $start=0; 
				    do
				    {
				        $state1=substr($record->state,$start,1);
				        $pdf->text($x, $y, $state1);
				        $x=$x+3.41; $start=$start+1;
				    }while($state_len>$start);

				    $pin_len=strlen($record->pin);
				    $x=78.5; $y=149.5; $start=0; 
				    do
				    {
				        $pin1=substr($record->pin,$start,1);
				        $pdf->text($x, $y, $pin1);
				        $x=$x+3.41; $start=$start+1;
				    }while($pin_len>$start);

				     $mobile_number_len=strlen($record->mobile_number);
				    $x=128; $y=150; $start=0; 
				    do
				    {
				        $mobile_number1=substr($record->mobile_number,$start,1);
				        $pdf->text($x, $y, $mobile_number1);
				        $x=$x+3.41; $start=$start+1;
				    }while($mobile_number_len>$start);


				    $email_len=strlen($record->email);
				    $x=47.6; $y=155; $start=0; 
				    do
				    {
				        $email1=substr($record->email,$start,1);
				        $pdf->text($x, $y, $email1);
				        $x=$x+3.41; $start=$start+1;
				    }while($email_len>$start);

				    $id_proof_number_len=strlen($record->id_proof_number);
				    $x=65; $y=238; $start=0; 
				    do
				    {
				        $id_proof_number1=substr($record->id_proof_number,$start,1);
				        $pdf->text($x, $y, $id_proof_number1);
				        $x=$x+3.41; $start=$start+1;
				    }while($id_proof_number_len>$start);

				    $address_proof_number_len=strlen($record->address_proof_number);
				    $x=145; $y=238; $start=0; 
				    do
				    {
				        $address_proof_number1=substr($record->address_proof_number,$start,1);
				        $pdf->text($x, $y, $address_proof_number1);
				        $x=$x+3.41; $start=$start+1;
				    }while($address_proof_number_len>$start);



				    $address_line1= $record->flatno.','.$record->premises;
				    $address_line1_len=strlen($address_line1);
				    $x=47.6; $y=135.8; $start=0; 
				    do
				    {
				        $address_line11=substr($address_line1,$start,1);
				        $pdf->text($x, $y, $address_line11);
				        $x=$x+3.41; $start=$start+1;
				    }while($address_line1_len>$start);				   
				    

                    

                     $address_line2=$record->street.','.$record->area;
                     $address_line2_len=strlen($address_line2);
				    $x=47.6; $y=139.5; $start=0; 
				    do
				    {
				        $address_line22=substr($address_line2,$start,1);
				        $pdf->text($x, $y, $address_line22);
				        $x=$x+3.41; $start=$start+1;
				    }while($address_line2_len>$start);



				    $pdf->text(55.5,109.8, 'A');
                    $pdf->SetFont('ZapfDingbats','', 6);
                    $pdf->text(67, 70.5, '4');
                    if($record->gender=='Male'){
                    	$pdf->text(52, 105.2, '4');
                    }else{

                    	$pdf->text(63.7, 105.2, '4');
                    }

                    $pdf->text(27.5, 229.1, '4');
                    $pdf->text(73.5, 229.1, '4');
                    $pdf->text(118, 229.1, '4');
                    $pdf->text(152, 229.1, '4');
                    $pdf->text(27.5, 233, '4');
                    




                }

               $pdf->Output(storage_path().'/fastag.pdf', 'F');     
               return (storage_path()."/new FPDI object created");

	            	//return view('fastag_pdf');
	            	//return view('fastag_download_pdf', compact('siteinformation'));
            }

            public function fastag_HDFC_pdf(){


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/HDFC-fastag-application.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);

                $pdf->text(30, 127.2, 'A');
                $pdf->text(48.5, 127.2, 'A');
                $pdf->text(169.5, 127.2, 'A');
                $pdf->text(52, 136.7, 'A');
                $pdf->text(169.5, 136.7, 'A');
                $pdf->text(37, 160, 'A');//ADDRESS1
                $pdf->text(37, 166.4, 'A');//ADDRESS2
                $pdf->text(37, 172.5, 'A');//CITY
                $pdf->text(132, 172.5, 'A');//STATE
                $pdf->text(75, 178.2, 'A');//PIN
                $pdf->text(132, 178.2, 'A');//MBL
                $pdf->text(37, 184.4, 'A');//EMAIL
                $pdf->text(59, 230.8, 'A');//ID
                $pdf->text(158.5, 230.8, 'A');//ADDRESS

                $pdf->SetFont('ZapfDingbats','', 6);
                    $pdf->text(14, 219.7, '4');
                    $pdf->text(68.5, 219.7, '4');
                    $pdf->text(120.5, 219.7, '4');
                    $pdf->text(160.5, 219.7, '4');
                    $pdf->text(14, 224.5, '4');
	    		
                

	    
                $pdf->Output(storage_path().'/HDFC.pdf', 'F');     
               return (storage_path()."/new FPDI object created");
	     	

	  }


	  public function fastag_SBI_pdf(){


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/SBI-FASTAG-APPLICATION.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5.5);

                $id_proof_number='ABFGYUJNDFBNJKNDFJS';
                $id_proof_number_len=strlen($id_proof_number);
				    $x=55.5; $y=68; $start=0; 
				    do
				    {
				        $id_proof_number1=substr($id_proof_number,$start,1);
				        $pdf->text($x, $y, $id_proof_number1);
				        $x=$x+6.8; $start=$start+1;
				    }while($id_proof_number_len>$start);

				    $pdf->text(55.5,71, 'A');//NAME2
				    $pdf->text(55.5,74, 'A');
				    $pdf->text(55.5,77, 'A');
				    $pdf->text(55.5,80, 'A');
				    $pdf->text(55.5,82.8, 'A');
				    $pdf->text(55.5,85.7, 'A');
				    $pdf->text(55.5,88.7, 'A');
				    $pdf->text(144.8,88.7, 'A');

				    $pdf->text(55.5,97.8, 'A');//name1
				    $pdf->text(55.5,100.8, 'A');//name2
				    $pdf->text(55.5,103.8, 'A');//maiden name
				    $pdf->text(55.5,106.8, 'A');//father name
				    $pdf->text(55.5,109.8, 'A');//mother name
				    $pdf->text(50.7,116, 'A');//dob
				    //proof of identity
				    $pdf->text(71,159.3, 'ABC');
				    $pdf->text(127,159.3, 'ABC');
				    $pdf->text(161.7,159.3, 'ABC');

				    $pdf->text(59.5,162.2, 'ABC');
				    $pdf->text(102.5,162.2, 'ABC');
				    $pdf->text(152.7,162.2, 'ABC');
				    
				    $pdf->text(65,165.4, 'ABC');
				    $pdf->text(118.7,165.4, 'ABC');

				    $pdf->text(118,168.4, 'ABC');
				    $pdf->text(168.7,168.4, 'ABC');

				    $pdf->text(109,171.6, 'ABC');
				    $pdf->text(159,171.6, 'ABC');



				    $pdf->SetFont('ZapfDingbats','', 6);
                    $pdf->text(60.5, 120.3, '4');//male
                    $pdf->text(70.6, 120.3, '4');//female
                    $pdf->text(63, 123.7, '4');//married
                    $pdf->text(75, 123.7, '4');//unmarried
                    $pdf->text(85, 123.3, '4');//others
                    $pdf->text(61, 126.8, '4');//indian
                    //$pdf->text(85, 128.3, '4');//others
                    //Residential Status
                    $pdf->text(61, 130.5, '4');
                    $pdf->text(87.5, 130.5, '4');
                    $pdf->text(96.7, 130.5, '4');
                    $pdf->text(120.3, 130.5, '4');

                    //Occupation
                    $pdf->text(61, 133.5, '4');
                    $pdf->text(138.5, 133.5, '4');
                    $pdf->text(59.5, 136.5, '4');
                    $pdf->text(76, 136.5, '4');

                    //ID PROOF
                    $pdf->text(49, 157.5, '4');
                    $pdf->text(144, 157.5, '4');
                    $pdf->text(183, 157.5, '4');
                    $pdf->text(82, 160.5, '4');
                    $pdf->text(183, 160.5, '4');
                    $pdf->text(95, 163.5, '4');
                    $pdf->text(49, 167, '4');
                    $pdf->text(49, 170, '4');

                    //address proof
                    $pdf->text(49, 185.5, '4');
                    $pdf->text(63.4, 185.5, '4');
                    $pdf->text(86, 185.5, '4');
                    $pdf->text(107.5, 185.5, '4');
                    $pdf->text(134, 185.5, '4');

                    //address type
                    $pdf->text(49, 182.5, '4');
                    $pdf->text(77, 182.5, '4');
                    $pdf->text(106, 182.5, '4');
                    $pdf->text(130, 182.5, '4');

                    //address
                    $pdf->text(32, 196, '4');
                    $pdf->text(32, 199.5, '4');
                    $pdf->text(32, 202.5, '4');
                    $pdf->text(47, 205.5, '4');
                    $pdf->text(95, 205.5, '4');
                    $pdf->text(42, 208.5, '4');

                
	    		
                

	    
                $pdf->Output(storage_path().'/SBI.pdf', 'F');     
               return (storage_path()."/new FPDI object created");
	     	

	  }

}