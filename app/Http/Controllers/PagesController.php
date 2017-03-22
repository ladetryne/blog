<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
	public function getIndex() {
		return view('pages.welcome');
	# Process variable data or params
	# talk to the model
	# Recive from the model
	# Compile or process data from the model if needed
	# Pass that data to the correct view
	}

	public function getAbout() {
		$firstname = 'Robin';
		$lastname = 'Foldnes';

		$fullname = $firstname . " " . $lastname;
		$email = 'ladetryne@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages.about')->withData($data);
	}	

	public function getContact() {
		return view('pages.contact');
	}

}
