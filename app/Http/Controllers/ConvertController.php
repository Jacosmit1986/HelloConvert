<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConvertController extends Controller
{
    
	public function create()
	{
		return view('convert');
	}
		
	public function convert()
	Route::get('/', function () {
    $tasks = Task::orderBy('name', 'asc')->get();

    return view('currencies', [
        'currencies' => $currency
    ]);
});

	
}