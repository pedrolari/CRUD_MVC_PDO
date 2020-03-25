<?php

class URL {

	public static function base() {
		$base_dir = str_replace(basename($_SERVER["SCRIPT_NAME"]), "", $_SERVER["SCRIPT_NAME"]);
		$base_url = (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://{$_SERVER["HTTP_HOST"]}{$base_dir}";
		return trim($base_url, "/");
	}

	public static function to($url) {
		$url = trim($url, "/");
		return trim(URL::base(). "/{$url}");
	}

	public static function getFull() {
		return (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://{$_SERVER["HTTP_HOST"]}{$_SERVER["REQUEST_URI"]}";
	}

}


?>
