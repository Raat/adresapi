<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\postcode;

use Illuminate\Http\Request;

class postcodeController extends Controller {

	public function getPostcode($postcode)
	{
		$data = postcode::where('postcode', $postcode)->get();
		if ($data->isEmpty()){
			return 'Onbekende postcode';
		}

		return $data;

		

	}

}
