<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get( 'notes', function () {
    return view( 'notes' );
} );

Route::get( 'physics', function () {
    return view( 'notes/physics' );
} );
Route::get( 'dwm', function () {
    return view( 'notes/dwm' );
} );
Route::get( 'cd', function () {
    return view( 'notes/cd' );
} );
Route::get( 'cn', function () {
    return view( 'notes/cn' );
} );
Route::get( 'ppl', function () {
    return view( 'notes/ppl' );
} );
Route::get( 'spm1', function () {
    return view( 'notes/spm1' );
} );
Route::get( 'automata', function () {
    return view( 'notes/automata' );
} );
Route::get( 'operatingsystem1', function () {
    return view( 'notes/operatingsystem1' );
} );
Route::get( 'dbms', function () {
    return view( 'notes/dbms' );
} );
Route::get( 'softwareengg', function () {
    return view( 'notes/softwareengg' );
} );
Route::get( 'datastructure', function () {
    return view( 'notes/datastructure' );
} );
Route::get( 'coa1', function () {
    return view( 'notes/coa1' );
} );
Route::get( 'discrete', function () {
    return view( 'notes/physics' );
} );
Route::get( 'cyber', function () {
    return view( 'notes/cyber' );
} );
Route::get( 'electrical1', function () {
    return view( 'notes/electrical1' );
} );
Route::get( 'math1', function () {
    return view( 'notes/math1' );
} );
Route::get( 'book', function () {
    return view( 'book' );
} );

Route::get( 'type', function () {
    return view( 'type' );
} );

Route::get( '/', function () {
	return view( 'welcome' );
} );

Route::get( '/test', function () {

	return view( 'test' );
} );


Route::get( '/about-us', function () {
	return view( 'about-us' );
} );


Route::get( '/thanks', function () {
	return view( 'thanks' );
} );

Route::post( '/mail', 'notificationController@sendmail' );

Route::post( '/enquiry', 'notificationController@enquiryNow' );

Route::post( '/student-request', 'notificationController@StudentRequirement' );


Route::get( '/students', function () {
	return view( 'students' );
} );

Route::get( '/student-enquiry', function () {
	return view( '/student-enquiry' );
} );

Route::get( '/contact-us', function () {
	return view( 'contact_us' );
} );

Route::get( '/logout', 'Auth\LoginController@logout' );

Route::get( '/teachers', function () {
	return view( 'teachers' );
} );

Route::get( '/terms-conditions', function () {
	return view( 'terms' );
} );


Auth::routes();


Route::group( [ 'prefix' => 'teachers' ], function () {

	Route::get( '/', function () {
		return view( 'teachers' );
	} );

	Route::get( '/teachers-details', function () {
		return view( 'teachers_details' );
	} );


} );


Route::group( [ 'prefix' => 'account', 'middleware' => 'auth' ], function () {

	Route::get( '/profile', 'TutorController@getProfile' );
	Route::get( '/status', 'TutorController@getstatus' );
	Route::get( '/wallet', 'TutorController@getwalletDetails' );
	Route::get( '/my-jobs', 'TutorController@jobsdetails' );

	Route::get( '/subscription', function () {
		return view( 'my-Subscription' );
	} );
	Route::post( '/teachers-details', 'TutorRegistration@updateTeacherDetail' );

	Route::get( '/payments', 'TutorController@tutorPaymentDetails' );

	Route::get( '/documents', function () {
		return view( 'my-documents' );
	} );
	Route::get( '/tutor-registration', function () {
		return view( 'tutor_registration' );
	} );


	Route::get( '/update-profile', function () {
		return view( 'update-profile' );
	} );


	Route::get( '/', 'TutorController@getDashboardDetails' )->name( 'dashboard' );


} );
Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );


Route::group(array('prefix' => 'admin', 'namespace'=>'Admin'), function() {
	Route::get('/', function () {
		return view('admin.admin_login');
	});
	Route::get('/logout',function (){
		auth()->guard('admin')->logout();
		return redirect('/admin');
	});
	Route::post('/admin_login','Auth\AdminLoginController@login');

	Route::group(['prefix' => 'dashboard', 'middleware'=>'admin_auth'], function() {
		Route::get( '/', 'adminController@getdashboard' );

		Route::get( '/teachers', 'adminController@viewTeachers' );
		Route::get( '/students', 'adminController@viewStudents' );

		Route::get('/teachers/{id}', 'adminController@viewTeachersProfile');
		Route::get('/students/{id}', 'adminController@viewStudentsDetails');
	});
});
