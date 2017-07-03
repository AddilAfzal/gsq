<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers
{
    public static function all() {
		$path = storage_path() . "/servers.json";

		$GameQ = new \GameQ\GameQ();
		$GameQ->addServersFromFiles($path);

		$servers = $GameQ->process();

    	return $servers;
	}
}
