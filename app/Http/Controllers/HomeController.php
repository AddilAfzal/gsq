<?php

namespace App\Http\Controllers;

use App\Servers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		return view('home.index')
			->with('servers', Servers::all());
	}

	public function table()
	{
		return view('home.table')
			->with('servers', Servers::all());
	}
}
