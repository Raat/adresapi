<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\postcode;
use Illuminate\Http\Request;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class postcodeController extends ApiGuardController {

	public function getPostcode($postcode)
	{
		$data = postcode::where('postcode', $postcode)->get();
		if ($data->isEmpty()){
			return 'Onbekende postcode';
		}

		return $data;

		

	}

}
