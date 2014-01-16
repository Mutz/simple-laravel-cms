<?php namespace Casadepedra\Filters;

use Iluminate\Routing\Route;
use Iluminate\Http\Request;
use Iluminate\Http\Response;
use Cache;
use Config;
use Str;

class CacheFilter {

	public function get($route, $request)
	{	
		$key = $this->makeKey($request->url());
		if (Cache::has($key)) return Cache::get($key);
	}

	public function put($route, $request, $response)
	{
		$key = $this->makeKey($request->url());
		if (!Cache::has($key)) Cache::put($key, $response->getContent(), 360);
	}

	protected function makeKey($url){
		return Config::get('cache.prefix') . $url;
	}
}