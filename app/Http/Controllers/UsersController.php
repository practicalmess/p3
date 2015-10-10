<?php

namespace P3\Http\Controllers;
use P3\Http\Controllers\Controller;

class UsersController extends Controller {

	public function getOptions() {
		return view('users.options');
	}



}
?>