<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
		$servers = json_decode(file_get_contents(storage_path() . "/servers.json"), true);

		$GameQ = new \GameQ\GameQ();
		$GameQ->addServer([
			'type' => 'css',
			'host' => '127.0.0.1:27015',
		]);

		$results = $GameQ->process();
		
		return view('home.index')
			->with('servers', $servers);
	}
}
