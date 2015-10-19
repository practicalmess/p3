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

		$this->validate(
			$request,
			['type'=>'required',
			 'amount'=>'required|numeric|max:99']
			);


		$lipsum = new LoremIpsum();
		$type = $request->input('type');
		$amount = $request->input('amount');
		return view('lorem.options')->with('type', $type)->with('amount', $amount)->with('lipsum',$lipsum);

	}





}
?>