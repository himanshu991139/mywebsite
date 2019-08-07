<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
	public function getdashboard(){

		$teachers_list = DB::table('users')->get();

		$student_list = DB::table('student')->get();

		$details = array($teachers_list,$student_list);



		return view('admin.user-dashboard',compact('details'));
	}


	public function viewTeachers(){
		$teachers_list = DB::table('users')->get();

		return view('admin.techers',compact('teachers_list'));
	}

	public function viewStudents(){


		$student_list = DB::table('student')->get();

		return view('admin.student_enquiry',compact('student_list'));
	}

	public function viewStudentsDetails($id){

		$profile         = DB::table( 'student' )->where( 'id', $id )->first();

		return view( 'admin.students', compact( 'profile' ) );
	}


	public function viewTeachersProfile($id){


		$profile         = DB::table( 'tutors_details' )->where( 'tutor_id', $id )->first();

		return view( 'admin.teachers_profile', compact( 'profile' ) );
	}
}
