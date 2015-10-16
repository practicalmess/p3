<?php

namespace P3\Http\Controllers;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use joshtronic\LoremIpsum;

class LoremController extends Controller {

	public function getOptions() {
		return view('lorem.options');
	}

	public function postGenerate(Request $request) {
		$lipsum = new LoremIpsum();
		return $lipsum->paragraphs($request->input('paragraphs'));
	}





}
?>