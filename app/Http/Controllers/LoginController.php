<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Microsoft\Graph\Graph;

class LoginController extends Controller 
{
	const CLIENT_ID = 'CLIENT_ID';
	const CLIENT_SECRET = 'CLIENT_SECRET';
	const TENANT = 'YOUR_TENANT';

	public function login()
	{
		if (session_status() != PHP_SESSION_ACTIVE)
			session_start();

		$url = "https://login.microsoftonline.com/" . self::TENANT . "/oauth2/token";

		$body = "grant_type=client_credentials" .
				"&client_id=" . self::CLIENT_ID . 
				"&client_secret=" . self::CLIENT_SECRET . 
				"&resource=https://graph.microsoft.com/";

		$curl = curl_init();
		$options = array(CURLOPT_URL => $url,
						 CURLOPT_POST => 1,
						 CURLOPT_RETURNTRANSFER => 1,
						 CURLOPT_POSTFIELDS => $body);
		curl_setopt_array($curl, $options);

		$token = json_decode(curl_exec ($curl), true)['access_token'];

		session(['access_token' => $token]);

		return redirect()->action('DataController@showUserInfo');
	}
}