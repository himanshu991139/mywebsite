<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller {


	public function getDashboardDetails() {

		$tutor_details = DB::table( 'tutors_details' )->where( 'tutor_id', Auth::user()->id )->first();

		return view( 'dashboard', compact( 'tutor_details' ) );


	}

	public function getProfile() {


		$personal_details = DB::table( 'users' )->where( 'id', Auth::user()->id )->first();
		$tutor_details    = DB::table( 'tutors_details' )->where( 'tutor_id', Auth::user()->id )->first();


		$details = array( $personal_details, $tutor_details );

		return view( 'my-profile', compact( 'details' ) );
	}



	public function getstatus() {

		$wallet    = DB::table( 'tutors_details' )->where( 'tutor_id', Auth::user()->id )->first();




		return view( 'my-status', compact( 'wallet' ) );



	}

	public function getwalletDetails() {



		$wallet    = DB::table( 'tutors_details' )->where( 'tutor_id', Auth::user()->id )->first();




		return view( 'my-wallet', compact( 'wallet' ) );
	}

	public function jobsdetails(){

		return view('teachers-job');
	}

	public function tutorPaymentDetails(){
		return view('my-payments');
	}

}
