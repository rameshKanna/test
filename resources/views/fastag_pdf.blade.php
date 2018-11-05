<?php

$pdf = new \fpdi\FPDI();
                $pdf->setSourceFile(storage_path().'/assets/pdfs/FASTag Application Form_1.pdf');
                $pdf->SetFont('Courier', 'B', 10);
                $pdf->AddPage();
                $pageCounter =1;
                $tplIdx = $pdf->importPage($pageCounter);
                $pdf->useTemplate($tplIdx, 0, 0, 210);
                $pdf->SetFont('Courier', 'B', 10);
                $siteinformation = DB::table('fastag_list')->select()->get();
                print_R($siteinformation);

                //Name title
                $pdf->text(74, 79.2,$siteinformation->customer_name);
                $pdf->text(93, 79.2,'A');
                $pdf->text(112, 79.2,'A');
                $pdf->text(138, 79.2,'A');               



               $pdf->Output(storage_path().'/fastag.pdf', 'F');     
               return (storage_path()."new FPDI object created");