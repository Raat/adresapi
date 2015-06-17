@extends('layouts.master')
 
@section('content')
				
				<div>
					<strong>Welkom</strong>
					{{ isset(Auth::user()->name) ? Auth::user()->name :  '' }}</br>
					<strong>Je api key is:</strong>
					{{ isset(Auth::user()->apiKey) ? Auth::user()->apiKey :  '' }}
 				</div>

@stop