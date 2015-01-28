<?php namespace App\Http\Controllers;

use App\Variables;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

//use Illuminate\Encryption\Encrypter;

class SiteconfigController extends Controller {

	public function index(Request $request)
	{
		$token = csrf_token();
		//$encrypted_token = $this->encrypter->encrypt(csrf_token());

		$postData = $request->all();
		//$postData['_token'] = $token;
		$dataString = json_encode($postData);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://billy.ellie.app/api/v1/siteconfig");
		//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST , 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $dataString );
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-type: application/json',
			'Accept:application/json',
			)
		);

		$output = curl_exec($ch);
		curl_close($ch);

		return $output;

	}

	public function store(Request $request)
	{

		$data = $request->all();

		if(isset($data['site_name']))
		{
			$siteName = Variables::firstOrNew(['name'=>'site_name']);
			$siteName->value = $request->input('site_name');
			$siteName->save();
		}

		if(isset($data['site_color']))
		{
			$siteName = Variables::firstOrNew(['name'=>'site_color']);
			$siteName->value = $request->input('site_color');
			$siteName->save();
		}

		if(isset($data['site_template']))
		{
			$siteName = Variables::firstOrNew(['name'=>'site_template']);
			$siteName->value = $request->input('site_template');
			$siteName->save();
		}

	}

}
