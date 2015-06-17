@extends('layouts.master')
 
@section('content')
				
				<div>
					<strong>Welkom</strong>
					{{ isset(Auth::user()->name) ? Auth::user()->name :  '' }}</br>
					<strong>Je api key is:</strong>
					{{ isset(Auth::user()->Key->key) ? Auth::user()->Key->key :  '' }}
 				</div>

@stop