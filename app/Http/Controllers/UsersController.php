<?php

namespace P3\Http\Controllers;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller {

	public function getOptions() {
		return view('users.options');
	}

	public function postGenerate(Request $request) {

			$this->validate(
			$request,
			['amount'=>'required|numeric|max:50']
			);

		$faker = \Faker\Factory::create();
		$amount = $request->input('amount');
		$address = $request->input('address');
		$phone = $request->input('phone');
		$email = $request->input('email');
		$cat = $request->input('cat');
		$users = Array();
		for ($i=0; $i < $amount; $i++) {
				$users[$i]['name'] = $faker->unique->name;
				if(isset($address))
					$users[$i]['address'] =$faker->unique->address;
				if(isset($phone))
					$users[$i]['phone'] =$faker->unique->phoneNumber;
				if(isset($email))
					$users[$i]['email'] =$faker->unique->safeEmail;
				if(isset($cat))
					$users[$i]['cat'] =$faker->unique->imageUrl(100, 100, 'cats');
		}

		$saveFile = fopen(public_path("/users.json"), "w");
		fwrite($saveFile, json_encode($users));
		fclose($saveFile);

		return view('users.options')->with('users', $users);
	}

}
?>