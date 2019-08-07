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
				'photo'              => 'required|image|nullable|max:1999',
				'idproof'            => 'required|image|nullable|max:1999',
				'degree_certificate' => 'required|image|nullable|max:1999',

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
		$medium             = $request['medium'];
		$board              = $request['board'];
		$working_as         = $request['working_as'];
		$subjects           = $request['subjects'];
		$classes            = $request['classes'];
		$school_tutor       = $request['school_tutor'];
		$educational_degree = $request['educational_degree'];
		$present_address    = $request['present_address'];
		$travel_range       = $request['travel_range'];


		if ( $request->has( 'photo' ) ) {
			$filenamewithexe = $request->file( 'photo' )->getClientOriginalName();
			$filname         = pathinfo( $filenamewithexe, PATHINFO_FILENAME );
			$extension       = $request->file( 'photo' )->getClientOriginalExtension();

			// Filename to store

			$fileNameToStore = $filname . '_' . time() . '.' . $extension;
			// Upload Image

			$request->file( 'photo' )->store( 'photo', ['disk' => 'uploads','name'=> $fileNameToStore ]);


		} else {
			$fileNameToStore = 'noimage.jpg';
		}

		if ( $request->has( 'idproof' ) ) {
			$filenamewithexeID = $request->file( 'idproof' )->getClientOriginalName();
			$filnameID         = pathinfo( $filenamewithexeID, PATHINFO_FILENAME );
			$extensionID       = $request->file( 'idproof' )->getClientOriginalExtension();

			// Filename to store

			$fileNameToStoreID = $filnameID . '_' . time() . '.' . $extensionID;
			// Upload Image

			$request->file( 'idproof' )->store( 'ID', ['disk' => 'uploads','name'=> $fileNameToStoreID ]);


		} else {
			$fileNameToStoreID = 'noimage.jpg';
		}

		if ( $request->has( 'degree_certificate' ) ) {
			$filenamewithexeDC = $request->file( 'degree_certificate' )->getClientOriginalName();
			$filnameDC         = pathinfo( $filenamewithexeDC, PATHINFO_FILENAME );
			$extensionDC       = $request->file( 'degree_certificate' )->getClientOriginalExtension();

			// Filename to store

			$fileNameToStoreDC = $filnameDC . '_' . time() . '.' . $extensionDC;
			// Upload Image

			$request->file( 'degree_certificate' )->store( 'Degree', ['disk' => 'uploads','name'=> $fileNameToStoreDC ]);


		} else {
			$fileNameToStoreDC = 'noimage.jpg';
		}


		foreach ( $medium as $medium1 ) {
			$insMedium .= $medium1 . " | ";
		}

		foreach ( $subjects as $subject1 ) {
			$sub .= $subject1 . " | ";
		}

		foreach ( $classes as $classes1 ) {
			$class .= $classes1 . " | ";
		}

		foreach ( $board as $board1 ) {
			$newboard .= $board1 . " |";

		}

		DB::table( 'tutors_details' )->insertGetId( [

			'tutor_id'           => Auth::user()->id,
			'dob'                => $dob,
			'qualification'      => $qualification,
			'experience'         => $experience,
			'gender'             => $gender,
			'available_in'       => $available,
			'travel_by'          => $travel,
			'instruction_medium' => $insMedium,
			'board'              => $newboard,
			'working_as'         => $working_as,
			'subjects'           => $sub,
			'class'              => $class,
			'school_teacher'     => $school_tutor,
			'educational_degree' => $educational_degree,
			'permanent_address'  => $present_address,
			'photo_path'         => $fileNameToStore,
			'id_path'            => $fileNameToStoreID,
			'degree_path'        => $fileNameToStoreDC,
			'travel_range'       => $travel_range

		] );

		$message =Auth::user()->name." Register just now";

		notificationController::notifyAdmin( $message );

		return view( 'my-status' );
	}


}
