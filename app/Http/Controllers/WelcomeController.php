<?php namespace App\Http\Controllers;

use App\Models\BloodType;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blood_types_positive = BloodType::where('rh_factor', '=', 'positive')->lists('group_name', 'id');
		$blood_types_negative = BloodType::where('rh_factor', '=', 'negative')->lists('group_name', 'id');
		
		return view('index', ['blood_types_positive' => $blood_types_positive, 'blood_types_negative' => $blood_types_negative]);
	}


}
