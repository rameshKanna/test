$pdf = new \fpdi\FPDI();
            //$pdf->SetFont('Courier', 'B', 18);
            // $pdf->AddPage('P');
            // $pdf->text(36, 50.8,'kumar');
            $pdf->setSourceFile(storage_path().'/assets/pdfs/fastag.pdf');
            $pdf->AddPage();
            $pageCounter =1;
            $tplIdx = $pdf->importPage($pageCounter);   
            $style = array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 63, 127));
                $this->PrintLine($pdf, 10,7,190,37,1);
                $pdf->Line(50, 7, 50, 44, $style);
                $pdf->Image('src/fuel7.jpg',14.5,10.5,30);
                $pdf->SetFont('Times', 'B', 24, '', false);
                $pdf->Text(53, 19, 'BROKERAGE FREE');
                $pdf->SetFont('helvetica', '', 10, '', false);
                $pdf->Text(53, 28, '19/135, Manicakvasagar Street, Balaji Nagar, Fairlands, Salem - 636016. Tamil Nadu.');
                $pdf->Text(53, 33, 'Email: info@brokerage-free.in || Phone: (0427)-430-2006, 750-206-7555, 750-206-8555');
                $pdf->Text(53, 38, 'GST Number: 33AAMFB1556E1ZR        ||      Whatsapp         750-206-8555');
                $pdf->Image('src/whatsapp-logo.jpg',144,35,4);  

                $pdf->SetFont('helvetica', 'B', 15, '', false);
                $pdf->Text(10.5, 58.5, 'FASTag Application #:');
                $pdf->Line(10, 60, 200, 60, $style);
                $pdf->SetFont('helvetica', 'B', 11, '', false);

                $pdf->Text(142, 59, 'Date:');

                $pdf->Text(10, 74, 'Name:');
                $pdf->Line(10, 75, 200, 75, $style);
                $pdf->Text(142, 74, 'DOB:');

                $pdf->Text(10, 84, 'PAN #:');
                $pdf->Text(73.5, 84, 'Aadhaar #:');
                $pdf->Line(10, 85, 200, 85, $style);
                $pdf->Text(142, 84, 'Mobile #:');

                $pdf->Text(10, 94, 'Vehicle #:');
                $pdf->Text(72, 94, ' Vehicle class:');
                $pdf->Text(141.5, 94, 'Commercial:');
                $pdf->SetFont('helvetica', '', 11, '', false);
                $pdf->Text(166, 94, ' YES / NO');
                $pdf->Line(10, 95, 200, 95, $style);

                $pdf->SetFont('helvetica', 'B', 11, '', false);
                $pdf->Line(10, 105, 200, 105, $style);
                $pdf->Text(9, 104, ' Issuing Bank:');
                $pdf->Text(73, 104, 'Tag cost:');
                $pdf->Text(141.5, 104, 'Security Deposit:');

                $pdf->Line(10, 115, 200, 115, $style);                

                $pdf->Text(10, 114, 'Min Bal:');
                $pdf->Text(45, 114, 'Convenience Fee:');
                $pdf->Text(110, 114, 'Recharge:');
                $pdf->Text(155, 114, 'Total cost:');

                $pdf->SetFont('helvetica', 'B', 11, '', false);
                $pdf->Text(10, 124, 'Documents:');
                $pdf->Text(125, 124, '||  Others:');
                $pdf->Text(10, 134, 'Pass Category:');

                $pdf->SetFont('helvetica', '', 10, '', false);
                $pdf->Text(35, 124, 'RC / Insurance / Driving License / Aadhaar / PAN Card');
                $pdf->Text(45, 133.5, 'Local 1');
                $pdf->Text(69, 133.5, 'Local 2');
                $pdf->Text(94, 133.5, 'School/College Pass');
                $pdf->Text(140, 133.5, 'General Pass');
                $pdf->Text(172, 133.5, 'None');
                $this->PrintLine($pdf, 41,130.5,3,3,1);
                $this->PrintLine($pdf, 65,130.5,3,3,1);
                $this->PrintLine($pdf, 90,130.5,3,3,1);
                $this->PrintLine($pdf, 136,130.5,3,3,1);
                $this->PrintLine($pdf, 168,130.5,3,3,1);
                $pdf->Line(10, 125, 200, 125, $style);
                $pdf->Line(10, 135, 200, 135, $style);// pass category line


                $pdf->SetFont('helvetica', '', 11, '', false);
                
                $pdf->Text(10, 150, 'POS Agent Name');
                $pdf->Text(87, 150, 'Agent Signature');
                $pdf->Text(163, 150, 'Customer Signature');

                $style1234 = array('width' => 0.7, 'cap' => 'round', 'join' => 'round', 'dash' => '3,10', 'color' => array(0, 0, 0));
                $pdf->Line(1, 154, 209, 154, $style1234);

                
                $this->PrintLine($pdf, 10,160,190,37,1);
                $pdf->Line(50, 160, 50, 197, $style);
                $pdf->Image('src/fuel7.jpg',14.5,163.7,30);

                $pdf->SetFont('Times', 'B', 24, '', false);
                $pdf->Text(53, 171, 'BROKERAGE FREE');
                $pdf->SetFont('helvetica', '', 10, '', false);
                $pdf->Text(53, 180, '19/135, Manicakvasagar Street, Balaji Nagar, Fairlands, Salem - 636016. Tamil Nadu.');
                $pdf->Text(53, 185, 'Email: info@brokerage-free.in || Phone: (0427)-430-2006, 750-206-7555, 750-206-8555');
                $pdf->Text(53, 190, 'GST Number: 33AAMFB1556E1ZR        ||      Whatsapp         750-206-8555');
                $pdf->Image('src/whatsapp-logo.jpg',144,187,4);

                $pdf->SetFont('helvetica', 'B', 11, '', false);
                $pdf->Text(10, 208.5, 'Name:');
                $pdf->Line(10, 209.8, 200, 209.8, $style);
                $pdf->Text(110, 208.5, 'Mobile Number:');
                
                $pdf->Text(10, 219, 'Vehicle Number:');
                $pdf->Line(10, 219.9, 200, 219.9, $style);
                $pdf->Text(80, 219, 'Vehicle Class:');
                $pdf->Text(140, 219, 'Issuing Bank:');

                $pdf->Text(10, 229, 'Tag Id:');
                $pdf->Text(80, 229, 'Tag cost:');
                $pdf->Line(10, 230.2, 200, 230.2, $style);
                $pdf->Text(140, 229, 'Security Deposit:');
                
                $pdf->Text(10, 239, 'Min Bal:');
                $pdf->Line(10, 239.9, 200, 239.9, $style);
                $pdf->Text(45, 239, 'Convenience Fee:');
                $pdf->Text(105, 239, 'Recharge:');
                $pdf->Text(155, 239, 'Total cost:');

                $pdf->Text(10, 249, 'Pass Category:');
                
                $pdf->SetFont('helvetica', '', 10, '', false);
                $pdf->Text(45, 248.5, 'Local 1');
                $pdf->Text(69, 248.5, 'Local 2');
                $pdf->Text(94, 248.5, 'School/College Pass');
                $pdf->Text(140, 248.5, 'General Pass');
                $pdf->Text(172, 248.5, 'None');
                $this->PrintLine($pdf, 41,245.5,3,3,1);
                $this->PrintLine($pdf, 65,245.5,3,3,1);
                $this->PrintLine($pdf, 90,245.5,3,3,1);
                $this->PrintLine($pdf, 136,245.5,3,3,1);
                $this->PrintLine($pdf, 168,245.5,3,3,1);
                $pdf->Line(10, 250, 200, 250, $style);// pass category line


                $pdf->SetFont('helvetica', '', 11, '', false);
                $pdf->Text(20, 259, 'For Full KYC, Please send complete application form to BROKERAGE FREE.');

                $pdf->Text(10, 269, 'Date:');
                $pdf->Text(10, 279, 'Place:');

                $pdf->Text(70, 269, 'POS Agent:');
                $pdf->Text(70, 279, 'Signature:');
                
                $pdf->Text(163, 279, 'Customer Signature');
                

      //***********Database value********************* 
                $pdf->SetFont('helvetica', '', 11, '', false);         
                $pdf->Text(69, 58.5, $data['fastag_no']);//FASTag Application #:
                $pdf->Text(154, 59, $data['activation_date']);//Date
                
                $pdf->Text(25, 74, $data['customer_name']);//name
                $pdf->Text(154, 74, $data['dob']);//dob
                
                $pdf->Text(25, 84, $data['pan']);//PAN
                $pdf->Text(95, 84, $data['aadhaar']);//Aadhaar
                $pdf->Text(160, 84, $data['mobile_number']);//Mobile
                
                $pdf->Text(30, 94, $data['vehicle_number']);//Vehicle #
                $pdf->Text(100, 94, $data['vehicle_class']);//Vehicle class

                $pdf->SetFont('ZapfDingbats','', 9);
                if ($data['commercial']=='yes'){
                $pdf->Text(169, 90.5, '4');//Commercial yes 
            	}
            	else{
                $pdf->Text(180, 90.5, '4');//Commercial no
            	}
                $pdf->SetFont('helvetica', '', 11, '', false);         
                $pdf->Text(37, 104, 'EQUITAS');// Issuing Bank
                $pdf->Text(92, 104, $data['tag_cost']);// Tag cost
                $pdf->Text(175, 104, $data['security_deposit']);// Security Deposit
                
                $pdf->Text(26, 114, $data['min_bal']);// Min Bal:
                $pdf->Text(79, 114, $data['con_fee']);// Convenience Fee:
                $pdf->Text(130, 114, $data['recharge_amount']);// Recharge
                $pdf->Text(176, 114, $data['total_cost']);// Total cost:

                $pdf->SetFont('ZapfDingbats','', 9);
                if($data['documents']=='rc'){
                $pdf->Text(37, 120.5, '4');// Documents
            	}
                elseif($data['documents']=='insurance'){
                $pdf->Text(47, 120.5, '4');// 
            	}elseif($data['documents']=='dl'){
                $pdf->Text(67, 120.5, '4');// 
                }elseif($data['documents']=='aadhaar_card'){
                $pdf->Text(93, 120.5, '4');// 
                }elseif($data['documents']=='aadhaar_card'){
                $pdf->Text(110, 120.5, '4');//
                }else{
                $pdf->SetFont('helvetica', '', 11, '', false);
                $pdf->Text(145, 124, 'AAA');//others
            	}

                $pdf->SetFont('ZapfDingbats','', 7);
                if($data['pass_category']=='local_pass1'){
                $pdf->Text(41.5, 133, '4');// Pass Category
            	}elseif($data['pass_category']=='local_pass2'){
                $pdf->Text(65.5, 133, '4');// Pass Category
                }elseif($data['pass_category']=='school_pass'){
                $pdf->Text(90.5, 133, '4');// Pass Category
                }elseif($data['pass_category']=='general_pass'){
                $pdf->Text(136.5, 133, '4');// Pass Category
                }else{
                $pdf->Text(168.5, 133, '4');// Pass Category
            	}
             //***********Page 2***************  
             
                $pdf->SetFont('helvetica', '', 11, '', false);
                $pdf->Text(24, 208.5, $data['customer_name']);//name 
                $pdf->Text(142, 208.5, $data['mobile_number']); //mbl nbr
                
                $pdf->Text(42, 219, $data['vehicle_number']); //vehicle nbr
                $pdf->Text(107, 219, $data['vehicle_class']); //vehicle Class
                $pdf->Text(167, 219, 'EQUITAS'); //bank
                
                $pdf->Text(24, 229, $data['fastag_no']); //Tag Id:
                $pdf->Text(99, 229, $data['tag_cost']); //Tag cost:
                $pdf->Text(173, 229, $data['security_deposit']); //Security Deposit
                
                $pdf->Text(26, 239, $data['min_bal']); //Min Bal
                $pdf->Text(79, 239, $data['con_fee']); //Convenience Fee:
                $pdf->Text(125, 239, $data['recharge_amount']); //Recharge
                $pdf->Text(176, 239, $data['total_cost']); //Total cost:

                $pdf->SetFont('ZapfDingbats','', 7);
                if($data['pass_category']=='local_pass1'){
                $pdf->Text(41.5, 248, '4');// Pass Category
                }elseif($data['pass_category']=='local_pass2'){
                $pdf->Text(65.5, 248, '4');// Pass Category
                }elseif($data['pass_category']=='school_pass'){
                $pdf->Text(90.5, 248, '4');// Pass Category
                }elseif($data['pass_category']=='general_pass'){
                $pdf->Text(136.5, 248, '4');// Pass Category
            	}else{
                $pdf->Text(168.5, 248, '4');// Pass Category
                }


            $pdf->Output($data['fastag_no'].'.pdf', 'D');