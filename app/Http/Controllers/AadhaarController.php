<?php
namespace App\Http\Controllers;

    use Illuminate\Routing\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use yajra\Datatables\Datatables;
    use Illuminate\Support\Facades\Log;
    use QrCode;
    use App\Http\Requests;

    class AadhaarController extends Controller
    {
        public function index(){

            $bank_name = DB::select('select distinct agency_name from aadhaar_enrolment_list');        
            return view('search_aadhaar_details', compact('bank_name'));
        }

        public function display_details1(Request $request)
        {       
            $agency_name = $request->input('agency_name');    
            //echo $agency_name;

            //$agency_name1 = 'IDBI Bank Ltd';
            $bank = DB::table('aadhaar_enrolment_list')->where('agency_name',$agency_name);
            //echo $bank;
            //return datatables::of($bank)->make(true);
            //return Datatables::of($bank)->make(true);

             return Datatables::of($bank)
             ->addColumn('action', 'index')
             ->make(true);
                 // ->addColumn('registrar_name' , 'ABC')
                 //return $data;
                 //return $test->render('search_aadhaar_details');
                
            //return view('search_aadhaar_details');
            //return Datatables::of(DB::table('aadhaar_enrolment_list'))->make(true);

            //return $datatable->make(true);

        }

        public function test(Request $request)

        {
            $bank_name = $request->input('agency_name');
            echo $bank_name;
            return view('search_aadhaar_details', compact('bank_name'));


        }
    }
