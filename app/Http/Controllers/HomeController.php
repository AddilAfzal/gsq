<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$path = storage_path() . "/servers.json";

		$GameQ = new \GameQ\GameQ();
		$GameQ->addServersFromFiles($path);

		$servers = $GameQ->process();

		return view('home.index')
			->with('servers', $servers);
	}
}
