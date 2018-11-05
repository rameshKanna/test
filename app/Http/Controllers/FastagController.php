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

	    // public function printLine($pdf,$x,$y,$width,$text_name,$length){

	    // 	//echo $text_name;

	    // 	$text_name_len=strlen($text_name);
				 //    $start=0; 
				 //    do
				 //    {
				 //        $customer_name1=substr($text_name,$start,1);
				 //        $pdf->text($x, $y, $customer_name1);
				 //        $x=$x+$width; $start=$start+1;
				 //    }while($text_name_len>$start);
	    // }

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

			        //$data= DB::select('select * from form_data_element');
			        $data = DB::table('form_data_element')->where('bank_name', 'ICICI')->get();

			        foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5);
			        		
			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;

			        	}
			        		
			    }endforeach;


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

                	$data = DB::table('form_data_element')->where('bank_name', 'HDFC')->get();

			        foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 6);

			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;

			        	}
			        	
			    }endforeach;
			    break;

			    case "EQUITAS":

      			$pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/EQUITAS-FASTAG-APPLICATION.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);
                //$records = DB::table('fastag_list')->get();
               //print_R($records);
               
			        //$customer_name=$last_name.'  '.$first_name.'  '.$middle_name;

			        //$data= DB::select('select * from form_data_element');
			        $data = DB::table('form_data_element')->where('bank_name', 'EQUITAS')->get();

			        foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5);
			        		
			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;
                    			case "FULL_TEXT";
                    			$pdf->text($data1->x,$data1->y,$data1->text_name);
                    			break;

			        	}
			        	
			    }endforeach;


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

                        $data = DB::table('form_data_element')->where('bank_name', 'SBI')->get();

			        	foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5.5);

			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;
                    		case "FULL_TEXT";
                    			$pdf->text($data1->x,$data1->y,$data1->text_name);
                    			break;

			        	}
			        	
			    }endforeach;
			    $pdf->AddPage();
                $pageCounter =2;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5.5);

                       $data = DB::table('form_data_element')->where('bank_name', 'SBI')->get();

			        	foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5.5);

			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;
                    		case "FULL_TEXT";
                    			$pdf->text($data1->x,$data1->y,$data1->text_name);
                    			break;

			        	}
			        	
			    }endforeach;
			    $pdf->AddPage();
                $pageCounter =3;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5.5);

                       $data = DB::table('form_data_element')->where('bank_name', 'SBI')->get();

			        	foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5.5);

			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;
                    		case "FULL_TEXT";
                    			$pdf->text($data1->x,$data1->y,$data1->text_name);
                    			break;

			        	}
			        	
			    }endforeach;
			    $pdf->AddPage();
                $pageCounter =4;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5.5);

                       $data = DB::table('form_data_element')->where('bank_name', 'SBI')->get();

			        	foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5.5);

			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;
                    		case "FULL_TEXT";
                    			$pdf->text($data1->x,$data1->y,$data1->text_name);
                    			break;

			        	}
			        	
			    }endforeach;
			    break;

			    case "AXIS":

      			$pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/AXIS-FASTAG-APPLICATION.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);
                //$records = DB::table('fastag_list')->get();
               //print_R($records);
               
			        //$customer_name=$last_name.'  '.$first_name.'  '.$middle_name;

			        //$data= DB::select('select * from form_data_element');
			        $data = DB::table('form_data_element')->where('bank_name', 'AXIS')->get();

			        foreach($data as $data1):{
			        	$pdf->SetFont('helvetica', '', 5);
			        		
			        	switch($data1->type){

			        		case "TEXT":
			        			$this->printLine($pdf,$data1->x,$data1->y,$data1->width,$data1->text_name,$data1->length);
			        			break;
			        		case "CHECK";
			        			$pdf->SetFont('ZapfDingbats','', 6);
                    			$pdf->text($data1->x,$data1->y,'4');
                    			break;
                    			

			        	}
			        	
			    }endforeach;


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
                $pageCounter =4;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 5.5);

        //         $id_proof_number='ABFGYUJNDFBNJKNDFJS';
        //         $id_proof_number_len=strlen($id_proof_number);
				    // $x=55.5; $y=68; $start=0; 
				    // do
				    // {
				    //     $id_proof_number1=substr($id_proof_number,$start,1);
				    //     $pdf->text($x, $y, $id_proof_number1);
				    //     $x=$x+6.8; $start=$start+1;
				    // }while($id_proof_number_len>$start);

				    // $pdf->text(55.5,71, 'A');//NAME2
				    // $pdf->text(55.5,74, 'A');
				    // $pdf->text(55.5,77, 'A');
				    // $pdf->text(55.5,80, 'A');
				    // $pdf->text(55.5,82.8, 'A');
				    // $pdf->text(55.5,85.7, 'A');
				    // $pdf->text(55.5,88.7, 'A');
				    // $pdf->text(144.8,88.7, 'A');

				    // $pdf->text(55.5,97.8, 'A');//name1
				    // $pdf->text(55.5,100.8, 'A');//name2
				    // $pdf->text(55.5,103.8, 'A');//maiden name
				    // $pdf->text(55.5,106.8, 'A');//father name
				    // $pdf->text(55.5,109.8, 'A');//mother name
				    // $pdf->text(50.7,116, 'A');//dob
				    // //proof of identity
				    // $pdf->text(71,159.3, 'ABC');
				    // $pdf->text(127,159.3, 'ABC');
				    // $pdf->text(161.7,159.3, 'ABC');

				    // $pdf->text(59.5,162.2, 'ABC');
				    // $pdf->text(102.5,162.2, 'ABC');
				    // $pdf->text(152.7,162.2, 'ABC');
				    
				    // $pdf->text(65,165.4, 'ABC');
				    // $pdf->text(118.7,165.4, 'ABC');

				    // $pdf->text(118,168.4, 'ABC');
				    // $pdf->text(168.7,168.4, 'ABC');

				    // $pdf->text(109,171.6, 'ABC');
				    // $pdf->text(159,171.6, 'ABC');



				    // $pdf->SetFont('ZapfDingbats','', 6);
        //             $pdf->text(60.5, 120.3, '4');//male
        //             $pdf->text(70.6, 120.3, '4');//female
        //             $pdf->text(63, 123.7, '4');//married
        //             $pdf->text(75, 123.7, '4');//unmarried
        //             $pdf->text(85, 123.3, '4');//others
        //             $pdf->text(61, 126.8, '4');//indian
        //             //$pdf->text(85, 128.3, '4');//others
        //             //Residential Status
        //             $pdf->text(61, 130.5, '4');
        //             $pdf->text(87.5, 130.5, '4');
        //             $pdf->text(96.7, 130.5, '4');
        //             $pdf->text(120.3, 130.5, '4');

        //             //Occupation
        //             $pdf->text(61, 133.5, '4');
        //             $pdf->text(138.5, 133.5, '4');
        //             $pdf->text(59.5, 136.5, '4');
        //             $pdf->text(76, 136.5, '4');

        //             //ID PROOF
        //             $pdf->text(49, 157.5, '4');
        //             $pdf->text(144, 157.5, '4');
        //             $pdf->text(183, 157.5, '4');
        //             $pdf->text(82, 160.5, '4');
        //             $pdf->text(183, 160.5, '4');
        //             $pdf->text(95, 163.5, '4');
        //             $pdf->text(49, 167, '4');
        //             $pdf->text(49, 170, '4');

        //             //address proof
        //             $pdf->text(49, 185.5, '4');
        //             $pdf->text(63.4, 185.5, '4');
        //             $pdf->text(86, 185.5, '4');
        //             $pdf->text(107.5, 185.5, '4');
        //             $pdf->text(134, 185.5, '4');

        //             //address type
        //             $pdf->text(49, 182.5, '4');
        //             $pdf->text(77, 182.5, '4');
        //             $pdf->text(106, 182.5, '4');
        //             $pdf->text(130, 182.5, '4');

        //             //address
        //             $pdf->text(32, 196, '4');
        //             $pdf->text(32, 199.5, '4');
        //             $pdf->text(32, 202.5, '4');
        //             $pdf->text(47, 205.5, '4');
        //             $pdf->text(95, 205.5, '4');
        //             $pdf->text(42, 208.5, '4');

                // //PAGE2
                // //ORDER NUMBER 7
                // $pdf->text(110,84, 'kANNAN');
                // $pdf->text(110,87, 'kANNAN');
                // $pdf->text(110,90.5, 'kANNAN');
                // $pdf->text(110,93.8, 'kANNAN');
                // $pdf->text(110,97, 'kANNAN');
                // $pdf->text(110,100.3, 'kANNAN');
                // $pdf->text(110,103.4, 'kANNAN');
                // $pdf->text(110,106.7, 'kANNAN');
                
                // //ORDER NUMBER 8
                // $pdf->text(86,116.5, 'kANNAN');
                // $pdf->text(86,119.7, 'kANNAN');
                // $pdf->text(86,123, 'kANNAN');
                // $pdf->text(86,126.2, 'kANNAN');
                // $pdf->text(86,129.6, 'kANNAN');
                
                // //OPTIONAL
                // $pdf->text(123.5,192, '1234567890');
                // $pdf->text(170,192, '800');
                // $pdf->text(32,194.7, 'NFBHUCBFUHE');
                // //DATA
                // $pdf->text(31,204.2, 'NFBHUCBFUHE');
                // $pdf->text(31,207.7, 'SALEM');


                //page 3
                // $pdf->text(37,49.8, 'SALEM');
                // $pdf->text(84,49.8, 'SALEM');
                // $pdf->text(117,49.8, 'SALEM');
                
                // $pdf->text(37,68.5, 'SALEM');
                // $pdf->text(84,68.5, 'SALEM');
                // $pdf->text(117,68.5, 'SALEM');
                
                //page4
                $pdf->text(32,227.5, '20-12-50');
                $pdf->text(32,234, 'SALEM');



                
	    		
                

	    
                $pdf->Output(storage_path().'/SBI.pdf', 'I');     
               return (storage_path()."/new FPDI object created");
	     	

	  }

	  public function fastag_equitas_pdf(){


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/EQUITAS-FASTAG-APPLICATION.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);

        //         $id_proof_number='ABFGYUJNDFBNJKNDABFGYUJNDFBNJKNDFJSFJSDCFVC';
        //         $id_proof_number_len=strlen($id_proof_number);
				    // $x=26; $y=65.3; $start=0; 
				    // d
				    // {
				    //     $id_proof_number1=substr($id_proof_number,$start,1);
				    //     $pdf->text($x, $y, $id_proof_number1);
				    //     $x=$x+3.98; $start=$start+1;
				    // }while($id_proof_number_len>$start);

				    //DATE
				    $pdf->text(28,38, 'SALEM');//DATE
				    
				    $pdf->text(162,46, 'SALEM');//number of vehicle
				    $pdf->text(26,65.3, 'SALEM');//NAME
				    $pdf->text(26,71.8, 'A');//MBL NO
				    $pdf->text(137.3,71.8, 'A');//ACC NBR
				    $pdf->text(26.3,78, 'A');//ADDRESS1
				    $pdf->text(26.3,84.4, 'A');//ADDRESS2
				    $pdf->text(26.3,90.8, 'A');//EMAIL
				    $pdf->text(49,97.4, 'A');//DOB
				    
				    //$pdf->text(49,97.4, 'A');//DOB
				    
				    $pdf->text(38,109.8, 'A');//Corporate Name
				    
				    //individual id proof
				    $pdf->text(31.5,171.5, 'A');//id proof
				    $pdf->text(132,171.5, 'A');//address proof


				    $pdf->SetFont('ZapfDingbats','', 6);
                    $pdf->text(55, 46, '4');//corporate
                    $pdf->text(79, 46, '4');//individual
                    

                    $pdf->text(132, 97.4, '4');//male
                    $pdf->text(150, 97.4, '4');//female
                    $pdf->text(170.5, 97.4, '4');//Third
                    	
                    	//type of entity
                    $pdf->text(60.5, 103.5, '4');//
                    $pdf->text(83, 103.5, '4');//
                    $pdf->text(116, 103.5, '4');//
                    $pdf->text(141, 103.5, '4');//
                    $pdf->text(169, 103.5, '4');//
                    $pdf->text(186, 103.5, '4');//
                    
                    //kyc
                    $pdf->text(181, 118.5, '4');//
                    $pdf->text(193, 118.5, '4');//
                    
                    //CORPORATE
                    $pdf->text(8, 139, '4');//Certificate of Incorporation/PartnershipDeed/Registration certificate of the firm
                    $pdf->text(143.5, 139, '4');//PAN Card of the corporate

                    $pdf->text(8, 145, '4');
                    $pdf->text(71, 145, '4');
                    $pdf->text(143.5, 145, '4');

                    $pdf->text(8, 151.5, '4');
                    $pdf->text(71, 151.5, '4');
                    $pdf->text(143.5, 151.5, '4');
                    
                    //individual
                    $pdf->text(8, 165, '4');
                    $pdf->text(39.5, 165, '4');
                    $pdf->text(85, 165, '4');
                    $pdf->text(107, 165, '4');
                    $pdf->text(137, 165, '4');

                    $pdf->AddPage();
                $pageCounter =2;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);

                //$pdf->text(137.5, 214.2, 'SALEM');

                $id_proof_number='02151856';
                $id_proof_number_len=strlen($id_proof_number);
				    $x=137.5; $y=214.3; $start=0; 
				    do
				    {
				        $id_proof_number1=substr($id_proof_number,$start,1);
				        $pdf->text($x, $y, $id_proof_number1);
				        $x=$x+3.98; $start=$start+1;
				    }while($id_proof_number_len>$start);

                $pdf->text(137, 223.8, 'SALEM');


                $pdf->Output(storage_path().'/EQUITAS.pdf', 'I');     
               return (storage_path()."/new FPDI object created");

              }

              public function fastag_axis_pdf(){


                $pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/AXIS-FASTAG-APPLICATION.pdf');
                //$pdf->SetFont('Courier', 'B', 8);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('helvetica', '', 6);

                $id_proof_number='ABFGYUJNDFBNJKNDABFGYUJNDFBNJKNDFJSFJSDCF';
                $id_proof_number_len=strlen($id_proof_number);
				    $x=35.5; $y=64.6; $start=0; 
				    do
				    {
				        $id_proof_number1=substr($id_proof_number,$start,1);
				        $pdf->text($x, $y, $id_proof_number1);
				        $x=$x+4.02; $start=$start+1;
				    }while($id_proof_number_len>$start);

				    $pdf->text(35.5, 70, 'A');
				    $pdf->text(140, 70, 'A');
				    //address
				    $pdf->text(35.5, 75.5, 'A');
				    $pdf->text(11.5, 81, 'A');
				    //email
				    $pdf->text(35.5, 86.6, 'A');
				    //dob
				    $pdf->text(63.5, 93, 'A');
				    

				    //Vehicle Reg No
				    $pdf->text(48, 113, 'A');
				    //Proof of Identity Document Number
				    $pdf->text(70, 192.5, 'A');
				    $pdf->text(70, 198, 'A');
				    //date
				    $pdf->text(22, 256, 'A');


				    $pdf->SetFont('ZapfDingbats','', 6);
                    //gender
                    $pdf->text(120, 93.2, '4');
                    $pdf->text(139, 93.2, '4');
                    $pdf->text(160, 93.2, '4');
                    //type of customer_details
                    $pdf->text(50.2, 98.7, '4');
                    $pdf->text(77, 98.7, '4');
                    $pdf->text(105, 98.7, '4');
                    $pdf->text(130.8, 98.7, '4');
                    $pdf->text(162, 98.7, '4');
                    //Public Ltd/Private Ltd/Partnership
                    $pdf->text(12, 133, '4');//Certificate of Incorporation/Partnership Deed/Registration certificate of the firm
                    
                    $pdf->text(12, 138, '4');
                    $pdf->text(88, 138, '4');

                    $pdf->text(12, 143, '4');
                    $pdf->text(88, 143, '4');
                    //Proprietorship
                    $pdf->text(12, 155, '4');
                    $pdf->text(88, 155, '4');

                    $pdf->text(12, 160.5, '4');

                    //Individual
                    $pdf->text(12, 175, '4');
                    $pdf->text(88, 175, '4');

                    $pdf->text(12, 180.5, '4');
                    $pdf->text(88, 180.5, '4');






                $pdf->Output(storage_path().'/axis.pdf', 'I');     
               return (storage_path()."/new FPDI object created");

              }


              public function new_pan_2018(){

            $pdf = new \fpdi\FPDI();
            $pdf->setSourceFile(storage_path().'/assets/pdfs/49A_New_PAN_Application_form_1.4.pdf');
            $pdf->AddPage();
            $pageCounter =1;
            $tplIdx = $pdf->importPage($pageCounter);
            $pdf->useTemplate($tplIdx, 0, 0, 210);


            $data = DB::table('new_pan')->where('form_id', '5')->get();

                    foreach($data as $data1):{
                        $pdf->SetFont('helvetica', '', 5);
                            
                        switch($data1->type){

                            case "TEXT":
                                $this->printLine($pdf,$data1->x,$data1->y,$data1->charSpan,$data1->name,$data1->length);
                                break;
                            case "CHECK";
                                $pdf->SetFont('ZapfDingbats','', 6);
                                $pdf->text($data1->x,$data1->y,'4');
                                break;
                                case "SHRUNKTEXT";
                                $pdf->text($data1->x,$data1->y,$data1->name);
                                break;

                        }
                        
                }endforeach;


                


            
        $pdf->Output('new-pan.pdf', 'I');
        }

        public function fastag_customer_details(){

                return view('fastag_app');

            }

          public function fastag_stored_details(Request $request){ 

      //     	$fastag_no = $request->input('fastag_no');
      //     	$customer_name = $request->input('customer_name');
	    	// $dob = $request->input('dob');
	    	// $pan = $request->input('pan');
	    	// $aadhaar = $request->input('aadhaar');
	    	// $mobile_number = $request->input('mobile_number');
	    	// $vehicle_number = $request->input('vehicle_number');
	    	// $vehicle_class= $request->input('vehicle_class');
	    	// $commercial = $request->input('commercial');
	    	// //$bank = $request->input('bank');
	    	// $tag_cost = $request->input('tag_cost');
	    	// $security_deposit = $request->input('security_deposit');
	    	// $commercial = $request->input('commercial');
	    	// $min_bal = $request->input('min_bal');
	    	// $con_fee = $request->input('con_fee');
	    	// $recharge_amount = $request->input('recharge_amount');
	    	// $total_cost = $request->input('total_cost');
	    	// $documents = $request->input('documents');
	    	// $pass_category = $request->input('pass_category');
	    	// $activation_date = $request->input('activation_date');

	    	$data['fastag_no'] = $request->input('fastag_no');
          	$data['customer_name'] = $request->input('customer_name');
	    	$data['dob'] = $request->input('dob');
	    	$data['pan'] = $request->input('pan');
	    	$data['aadhaar'] = $request->input('aadhaar');
	    	$data['mobile_number'] = $request->input('mobile_number');
	    	$data['vehicle_number'] = $request->input('vehicle_number');
	    	$data['vehicle_class']= $request->input('vehicle_class');
	    	$data['commercial'] = $request->input('commercial');
	    	//$bank = $request->input('bank');
	    	$data['tag_id'] = $request->input('tag_id');
	    	$data['tag_cost'] = $request->input('tag_cost');
	    	$data['security_deposit'] = $request->input('security_deposit');
	    	//$data['commercial'] = $request->input('commercial');	
	    	$data['min_bal'] = $request->input('min_bal');
	    	$data['con_fee'] = $request->input('con_fee');
	    	$data['recharge_amount'] = $request->input('recharge_amount');
	    	$data['total_cost'] = $request->input('total_cost');
	    	$data['documents'] = $request->input('documents');
	    	$data['pass_category'] = $request->input('pass_category');
	    	$data['activation_date'] = $request->input('activation_date');
	    	DB::table('fastag_app_pdf')->insert($data);
	    	return view('fastag_view_details', compact('data'));

	    	
	    	


          }	

          public function PrintLine($pdf, $x, $y, $width, $height,$n)
            {
                   
                 for($z=1; $z<= $n; $z++){

                  $style = array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 63, 127));
                  $pdf->Line($x, $y, $x + $width, $y, $style);//x
                  $pdf->Line($x, $y, $x, $y + $height, $style);//y
                  $pdf->Line($x, $y + $height, $x + $width, $y + $height, $style);//x
                  $pdf->Line($x + $width, $y, $x + $width, $y + $height , $style);//y
                     
                 $x=$x + $width;
                 //$y=$y;
                 //_message(log'debug','Panservices1 :function call x:y '.$x.":".$y);
                }

            }

          public function download_pdf(){

          	return view('download_pdf');
          	// $pdf = new \fpdi\FPDI();
           //  //$pdf->SetFont('Courier', 'B', 18);
           //  // $pdf->AddPage('P');
           //  // $pdf->text(36, 50.8,'kumar');
           //  $pdf->setSourceFile(storage_path().'/assets/pdfs/fastag.pdf');
           //  $pdf->AddPage();
           //  $pageCounter =1;
           //  $tplIdx = $pdf->importPage($pageCounter);   
           //  $style = array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 63, 127));
                

           //      $pdf->SetFont('helvetica', 'B', 15, '', false);
           //      $pdf->Text(10.5, 58.5, 'FASTag Application #:');
           //      $pdf->Line(10, 60, 200, 60, $style);
           //      $pdf->SetFont('helvetica', 'B', 11, '', false);

           //      $pdf->Text(142, 59, 'Date:');

                



           //  $pdf->Output('fastag.pdf', 'I');
          }	

}