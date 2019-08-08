<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class TutorRegistration extends Controller {

	public function updateTeacherDetail( Request $request ) {


		$this->validate( $request,
			[


			] );


		$insMedium = "";
		$class     = "";
		$sub       = "";
		$newboard  = "";

		$dob                = $request['dob'];
		$qualification      = $request['qualification'];
		$experience         = $request['experience'];
		$gender             = $request['gender'];
		$available          = $request['available'];
		$travel             = $request['travel'];


		$educational_degree = $request['educational_degree'];








		DB::table( 'tutors_details' )->insertGetId( [

			'tutor_id'           => Auth::user()->id,
			'dob'                => $dob,
			'qualification'      => $qualification,
			'experience'         => $experience,
			'gender'             => $gender,
			'available_in'       => $available,
			'travel_by'          => $travel,



			'educational_degree' => $educational_degree,





		] );

		$message =Auth::user()->name." Register just now";

		notificationController::notifyAdmin( $message );

		return view( 'my-status' );
	}


}
