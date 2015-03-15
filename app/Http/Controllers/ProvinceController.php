<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Village;

class ProvinceController extends Controller {

	public function select_district_province($province_code)
	{

		//return $province_code;
		$districts_names = District::where('province_code', '=', $province_code)->lists('name_en');
		$districts_codes = District::where('province_code', '=', $province_code)->lists('district_code');

		$districts = array($districts_names, $districts_codes);
		return $districts;
	}

	public function select_village_district_province($district_code)
	{

		//return $province_code;
		$villages_names = Village::where('districtcode', '=', $district_code)->lists('name_en');
		$villages_codes = Village::where('districtcode', '=', $district_code)->lists('villagecode');

		$villages = array($villages_names, $villages_codes);
		return $villages;
	}
}
