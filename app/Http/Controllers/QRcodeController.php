<?php   
	namespace App\Http\Controllers;

	use Illuminate\Routing\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use yajra\Datatables\Datatables;
	use Illuminate\Support\Facades\Log;
	use QrCode;

	




	use App\Http\Requests;
	//use App\Http\Controllers\Controller;

	class QRcodeController extends Controller
	{

		public function create_qr_code(){


			return view('home');
		}

		public function qr_details(Request $request){

			$data['url'] = $request->input('url');
			$data['qr_text'] = $request->input('qr_text');
			$data['email_email'] = $request->input('email_email');
			$data['email_subject'] = $request->input('email_subject');
			$data['email_message'] = $request->input('email_message');
			$data['call_phone_number'] = $request->input('call_phone_number');
			$data['sms_number'] = $request->input('sms_number');
			$data['sms_message'] = $request->input('sms_message');
			$data['google_map_lat'] = $request->input('google_map_lat');
			$data['google_map_long'] = $request->input('google_map_long');
			$data['wifi_name'] = $request->input('wifi_name');
			$data['wifi_password'] = $request->input('wifi_password');
			$data['vcard_full_name'] = $request->input('vcard_full_name');
			$data['vcard_company_name'] = $request->input('vcard_company_name');
			$data['vcard_mbl_nbr'] = $request->input('vcard_mbl_nbr');
			$data['vcard_landline'] = $request->input('vcard_landline');
			$data['vcard_email'] = $request->input('vcard_email');
			$data['vcard_street'] = $request->input('vcard_street');
			$data['vcard_city'] = $request->input('vcard_city');
			$data['vcard_pincode'] = $request->input('vcard_pincode');
			$data['vcard_state'] = $request->input('vcard_state');
			$data['vcard_country'] = $request->input('vcard_country');
			$data['vcard_url'] = $request->input('vcard_url');

			// $this->validate($request, [
   //          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   //      ]);
			 // $data = $request->input('image');
			 // var_dump($data);

			// $this->validate($request, [
   //          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   //      ]);


   //      $image = $request->file('image');
   //      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
   //      $destinationPath = public_path('/images');
   //      $image->move($destinationPath, $input['imagename']);


   //      $this->postImage->add($input);


   //      return back()->with('success','Image Upload successful');

        
// $photo = $request->file('image')->getClientOriginalName();
// $destination = base_path() . '/public/uploads';
// $request->file('image')->move($destination, $photo);

			//var_dump($request->file('image'));
        	// $file = $request->file('image');
        	// $name = $file->getClientOriginalName();
         //    $file->move('images' , $name);
         //    $inputs = $request->all();
         //    $inputs['path'] = $name;
			
			//$url = $request->input('url');
			// $qr_text = $request->input('qr_text');			
			//echo $data;
			//return view('home', compact('url','qr_text'));
			return view('home', compact('data'));

			//echo $data['url'];



		}

	    public function qr_code_sms(){

	    	// echo "Test";
	    	// echo QrCode::size(200)->generate('http://www.simplesoftware.io');
	    	
	    	echo "Email";
	    	echo QrCode::size(200)->color(150,90,10)->backgroundColor(10,14,244)->email('dharani@brokerage-free.com','This is the subject', 'This is the message body');
	   //  	echo "Phone Number";
	   //  	echo QrCode::size(200)->phoneNumber('8508692020');	
	   //  	echo "SMS";
	   //  	echo QrCode::size(200)->SMS('850-869-2020','Body of the message');
	   //  	echo "Google Maps";
	   //  	echo QrCode::size(200)->geo(37.822214, -122.481769);
	   //  	echo "WIFI";
	   //  	echo QrCode::size(200)->wiFi([
				//     'ssid' => 'Network Name',
				//     'encryption' => 'WPA',
				//     'password' => 'BFREE'
				// ]);

	    }

	    public function qr_code1(){


	    	echo QrCode::size(300)->encoding('UTF-8')
	    	->generate("BEGIN:VCARD\nVERSION:3.0\nN:Lastname;Surname\nFN:BROKERAGE FREE\nORG:OrgName\nURL:http://www.url.com/ \n EMAIL:test@url.com\nTEL;TYPE=voice,work,pref:+850-869-2020\n ADR;TYPE=intl,work,postal,pack(format)rcel:;;Street;City;;Zip;Country\nEND:VCARD");

	    }
	    public function image_color_picker(){

	    	return view('image_color_picker');
	    }


	      	

	  }
