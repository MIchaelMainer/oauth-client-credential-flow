<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

class DataController extends Controller 
{
	public function showUserInfo()
	{
		return view('data', array('accessToken' => session('access_token')));
	}

}
