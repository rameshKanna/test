<?php   
	namespace App\Http\Controllers;

	use Illuminate\Routing\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use yajra\Datatables\Datatables;
	use Illuminate\Support\Facades\Log;
	use QrCode;
	use App\Http\Requests;
	use Mbarwick83\Shorty\Facades\Shorty;
	use Shortener;

	class HomeController extends Controller
	{
	    public function aadhar_search_details()
	    {
			    	$district = DB::select('select distinct district,state from aadhar');
			    	return view('search_details', compact('district'));
	    	//return 'hello';
	    }

	    public function display_details(Request $request)
	    {

	    	$aadhar_district='Alirajpur';
	    	//return Datatables::of(DB::select('select * from aadhar'))->make(true);
	    	//$aadhar_district = $request->input('district');
	    	//Log::debug('Select District: '.$aadhar_district);
	    	$get_district=DB::table('aadhar')->where('district', $aadhar_district);
	    	return datatables::of($get_district)
		    	 // ->addColumn('registrar_name' , 'ABC')
		    	 ->addColumn('registrar_name', function ($get_district) {
	                // return '<a href="#edit-'.$get_district->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> ADD</a>';
	                return 'Hi'. $get_district->registrar_name;
	            	})
		    	 ->editColumn('id', 'ID: {{$id}}')
            	->make(true);

	    	//return Datatables::of(DB::table('aadhar'))->make(true);
	    }

	    public function get_district_details(Request $request)
	    {

	    	$aadhar_district = $request->input('district');
	    	//$aadhar_state = $request->input('state');
	    	Log::debug('Select District: '.$aadhar_district);
	    	//Log::debug('Display district details ');
	    	//return $aadhar_district;
	    	//$data['get_district'] = DB::select( DB::raw("SELECT * FROM aadhar WHERE district = '$aadhar_district'"));
	    	//$get_district = DB::table( DB::raw("SELECT * FROM aadhar WHERE district = '$aadhar_district'"));
	    	//$get_district = DB::table( DB::raw("SELECT * FROM aadhar WHERE district = '$aadhar_district'"));
	    	 $get_district=DB::table('aadhar')->where('district', $aadhar_district);

	    	//$get_district = DB::table(DB::raw("SELECT * FROM aadhar WHERE district = '$aadhar_district'"));
	    	//$sql="SELECT * FROM aadhar WHERE district = '$aadhar_district'";

	    	//$get_district = DB::table("SELECT * FROM aadhar WHERE district = '$aadhar_district'");
	    	//return view('search_details', compact('get_district'));
	    	 //return $get_district;
	    	 //dd($get_district);
	    	//return Datatables::of($get_district)->make(true);
	    	//return Datatables::of(DB::table('aadhar'))->make(true);
	    	//return Datatables::of(DB::select("SELECT * FROM aadhar WHERE district = '$aadhar_district'"))->make(true);
	    	//$query = $request->all();
	    	//Log::debug('Display district details ');
	    	//Log::debug('Filter District details: '.$get_district);
	    	return datatables::of($get_district)->make(true);
	    	//return Datatables::of(DB::select('SELECT * FROM aadhar WHERE district = '$aadhar_district''))->make(true);
	    	//return datatables::of(DB::table('aadhar')->where('district', $aadhar_district))->make(true);
	    	 //return Datatables::of($query)->make(true);
	    	// return Datatables::of($get_district)
	    	// 			->filterColumn('registrar_name', 'agency_name', 'center_summary','contact_person','mobile_nbr','date','center_type')
       //                   ->make(true);
	    }

	    public function generate_sitemap()
	    {

	    	 $posts = DB::select('select * from aadhar');
	    	// return view('sitemap.aadhar', compact('aadhar_details'));
	    	 //$posts = aadhar::where('visible', 1)->orderBy('updated_at', 'DESC')->get();
    		return response()->view('sitemap.aadhar', compact('posts'))->header('Content-Type', 'text/xml');

	    }

	    public function generate_sitemap_brokerage_free_in()
	    {

	    	 $posts = DB::select('select * from bkfree_url');
	    	// return view('sitemap.aadhar', compact('aadhar_details'));
	    	 //$posts = aadhar::where('visible', 1)->orderBy('updated_at', 'DESC')->get();
    		return response()->view('sitemap.bfree', compact('posts'))->header('Content-Type', 'text/xml');

	    }

	    public function uploadFile(){


	    	return view('view_file_upload');
	    }

	    public function showuploadFile(Request $request){

	    	 $file = $request->file('file');
   
      //Display File Name
      // echo 'File Name: '.$file->getClientOriginalName();
      // echo '<br>';
   
      // //Display File Extension
      // echo 'File Extension: '.$file->getClientOriginalExtension();
      // echo '<br>';
   
      // //Display File Real Path
      // echo 'File Real Path: '.$file->getRealPath();
      // echo '<br>';
   
      // //Display File Size
      // echo 'File Size: '.$file->getSize();
      // echo '<br>';
   
      // //Display File Mime Type
      // echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
      echo "file successfully uploaded";


	    }

	    public function googlemap()
	    {
	    	
	    	return view('googlemap');
	    	//return 'hello';
	    }

	    public function test()
	    {
	    	
	    	return view('test');
	    	
	    }
	    public function qr_calander()
	    {
	    	
	    	return view('test');
	    	
	    }


	    public function qr_code(){

	   //  	echo "TEst";
	   //echo QrCode::size(200)->generate('sms:7502040555:I am a pretyped message');
	    	
	   //  	echo "Email";
	   //  	echo QrCode::size(200)->email('dharani@brokerage-free.com','This is the subject', 'This is the message body');
	   //  	echo "Phone Number";
	   //  	echo QrCode::size(200)->phoneNumber('8508692020');
	   //  	echo "SMS";
	   //  	echo QrCode::size(200)->SMS('850-869-2020','Body of the message');
	   //  	echo "Google Maps";
	   //  	echo QrCode::size(200)->geo(11.675272, 78.141090);
	   //  	echo "WIFI";
	   //  	echo QrCode::size(200)->wiFi([
				//     'ssid' => 'Bfree-Linksys',
				//     'encryption' => 'WPA',
				//     'password' => 'bfree1234'
				// ]);
	    	//echo QrCode::size(200)->merge('/public/uploads/logo_png.png')->generate('http://www.simplesoftware.io');

	    		// $png = QrCode::format('png')->size(200)->merge('/public/uploads/logo_png.png')->generate('http://www.simplesoftware.io');
       //                  $png = base64_encode($png);
       //                  echo "<img src='data:image/png;base64," . $png . "'>";


                        $png = QrCode::format('png')->size(300)->merge('/public/uploads/bfree.png')->generate('https://panservices.brokerage-free.in/');
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";

	    	// echo QrCode::size(200)->SMS('750-204-0555','The body of the message goes here.');



	    	//echo QrCode::format('png')->mergeString(Storage::get('path/to/image.png'))->generate();
	    	//	echo QrCode::generate('http://www.simplesoftware.io');

	 //**************website working****************************
	    	// echo QrCode::size(200)->generate('http://www.simplesoftware.io');
	    	
	    	//echo QrCode::size(200)->BEGIN:VCARD('foo@bar.com');
	    	//echo QrCode::size(200)->encoding('UTF-8')->generate("BEGIN:VCARD\nVERSION:3.0\nN:Lastname;Surname\nFN:Displayname\nORG:OrgName\nURL:http://www.url.com/ \n EMAIL:test@url.com\nTEL;TYPE=voice,work,pref:+555-555-5555\n ADR;TYPE=intl,work,postal,parcel:;;Street;City;;Zip;Country\nEND:VCARD");
	    // 	echo QrCode::size(200)->encoding('UTF-8')->generate("BEGIN:VCARD\n
					// VERSION:3.0\n
					// N:DHARANI;Surname\n
					// FN:BROKERAGE FREE\n
					// ORG:BROKERAGE FREE\n
					// URL:https://brokerage-free.in/ \n
					// EMAIL:info@brokerage-free.in \n
					// TEL;TYPE=voice,work,pref:+850-869-2020 \n 
					// ADR;TYPE=intl,work,postal,parcel:;;Manicakvasagar Street;Salem ;;636016;India \n
					// END:VCARD");
	    }

	    public function qr_code1(){		


	    	$png= QrCode::format('png')->size(300)->merge('/public/uploads/bfree1.png', .2)->encoding('UTF-8')
	    	->generate("BEGIN:VCARD
VERSION:2.1
N:Gump;Forrest;;Mr.
FN:	Mohana Aravind Srinivasan
ORG:Brokerage Free
TEL;WORK;VOICE:750-206-7555
ADR;WORK;PREF:;;19/135, Manicakvasagar Street,Behind Deiveegam Kalyana Mandapam,Balaji Nagar, Fairlands, Salem;Tamil Nadu - 636016
EMAIL:msaravind@brokerage-free.com 
URL:https://brokerage-free.in
END:VCARD");

	     $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";
	    }


	    public function short_url(){



	    	$url ="http://google.com";
	    	//$url ="https://panservices.brokerage-free.in/";
			//return Shorty::shorten($url);
			$status= Shorty::shorten($url);
			 return Shorty::stats($status);

			// $url = "https://github.com/leadthread/laravel-shortener";
			// return $shortUrl = Shortener::shorten($url);
	    }
//*********https://packagist.org/packages/leadthread/laravel-shortener********
	    public function shortner_url(){

	    	$url = "https://panservices.brokerage-free.in/";
			 $shortUrl = Shortener::shorten($url);

			$png = QrCode::format('png')->size(200)->generate($shortUrl);
                        $png = base64_encode($png);
                        echo "<img src='data:image/png;base64," . $png . "'>";


	    }

	    //**************https://github.com/MihaiBlebea/url-shortener**********

     	public function fastag_image_size(){

     		return view('fastag_image_size');
     	}

	  }
