<?php namespace App\Http\Controllers;

use Request;
use Validator;
use Mail;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

}
