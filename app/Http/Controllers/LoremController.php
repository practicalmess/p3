<?php

namespace P3\Http\Controllers;
use P3\Http\Controllers\Controller;

class LoremController extends Controller {

	public function getOptions() {
		return view('lorem.options');
	}

	public function postGenerate() {
		return view('lorem.results');
	}





}
?>