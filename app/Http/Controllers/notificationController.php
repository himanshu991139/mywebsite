<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notificationController extends Controller {


	public function enquiryNow( request $request ) {


		$name  = $request['name'];
		$email = $request['email'];
		$phone = '+91' . $request['phone'];

		$this->validate( $request,
			[
				'name'  => [ 'required', 'string', 'max:255' ],
				'email' => [ 'required', 'string', 'email', 'max:255' ],
				'phone' => [ 'required', 'min:10', 'numeric' ],

			] );


		$msg       = "Message For Enquiry";
		$fields    = [
			[ 'title' => 'Name', 'value' => $name ],
			[ 'title' => 'Email', 'value' => $email ],
			[ 'title' => 'Number', 'value' => $phone ]
		];
		$url       = 'https://hooks.slack.com/services/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';
		$useragent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
		$payload   = 'payload={"channel": "#studentquery", "text": "' . $msg . '", "fields":' . json_encode( $fields ) . '}';
		$ch        = curl_init();
		curl_setopt( $ch, CURLOPT_USERAGENT, $useragent ); //set our user agent
		curl_setopt( $ch, CURLOPT_POST, true ); //set how many paramaters to post
		curl_setopt( $ch, CURLOPT_URL, $url ); //set the url we want to use
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
		curl_exec( $ch ); //execute and get the results
		curl_close( $ch );

		return view( 'thanks' );


	}

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function StudentRequirement( request $request ) {
		$name        = $request['name'];
		$email       = $request['email'];
		$phone       = '+91' . $request['phone'];
		$address     = $request['address'];
		$class       = $request['class'];
		$subject     = $request['subject'];
		$tution_type = $request['preference'];
		$message     = $request['message'];

//		$this->validate( $request,
//			[
//				'name'    => [ 'required', 'string', 'max:255' ],
//				'email'   => [ 'required', 'string', 'email', 'max:255' ],
//				'phone'   => [ 'required', 'min:10', 'numeric' ],
//				'class'   => [ 'required' ],
//				'subject' => [ 'required' ],
//				'address' => [ 'requires' ],
//				'message' => [ 'required' ]
//
//			] );


		DB::table( 'student' )->insertGetId( [

			'name'         => $name,
			'email'        => $email,
			'phone'        => @$phone,
			'address'      => $address,
			'class'        => $class,
			'subject'      => $subject,
			'tuition_type' => $tution_type,
			'message'      => $message


		] );


		$msg       = "Message For Tutor Requirement";
		$fields    = [
			[ 'title' => 'Name', 'value' => $name ],
			[ 'title' => 'Email', 'value' => $email ],
			[ 'title' => 'Number', 'value' => $phone ],
			[ 'title' => 'Class', 'value' => $class ],
			[ 'title' => 'Subject', 'value' => $subject ],
			[ 'title' => 'Tuition Preference ', 'value' => $tution_type ],
			[ 'title' => 'Address ', 'value' => $address ],
			[ 'title' => 'Message', 'value' => $message ]
		];
		$url       = 'https://hooks.slack.com/services/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';
		$useragent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
		$payload   = 'payload={"channel": "#studentquery", "text": "' . $msg . '", "fields":' . json_encode( $fields ) . '}';
		$ch        = curl_init();
		curl_setopt( $ch, CURLOPT_USERAGENT, $useragent ); //set our user agent
		curl_setopt( $ch, CURLOPT_POST, true ); //set how many paramaters to post
		curl_setopt( $ch, CURLOPT_URL, $url ); //set the url we want to use
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
		curl_exec( $ch ); //execute and get the results
		curl_close( $ch );

		return view( 'thanks' );

	}

	public function sendmail( request $request ) {
		$name    = $request['name'];
		$email   = $request['email'];
		$phone   = '+91' . $request['phone'];
		$message = $request['message'];


		$msg       = "Contact Us";
		$fields    = [
			[ 'title' => 'Name', 'value' => $name ],
			[ 'title' => 'Email', 'value' => $email ],
			[ 'title' => 'Number', 'value' => $phone ],
			[ 'title' => 'Message', 'value' => $message ]
		];
		$url       = 'https://hooks.slack.com/services/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';
		$useragent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
		$payload   = 'payload={"channel": "#studentquery", "text": "' . $msg . '", "fields":' . json_encode( $fields ) . '}';
		$ch        = curl_init();
		curl_setopt( $ch, CURLOPT_USERAGENT, $useragent ); //set our user agent
		curl_setopt( $ch, CURLOPT_POST, true ); //set how many paramaters to post
		curl_setopt( $ch, CURLOPT_URL, $url ); //set the url we want to use
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
		curl_exec( $ch ); //execute and get the results
		curl_close( $ch );

		return view( 'thanks' );
	}

	public static function notifyAdmin( $message ) {
		$msg = $message;

		$url       = 'https://hooks.slack.com/services/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';
		$useragent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
		$payload   = 'payload={"channel": "#studentquery", "text": "' . $msg . '"}';
		$ch        = curl_init();
		curl_setopt( $ch, CURLOPT_USERAGENT, $useragent ); //set our user agent
		curl_setopt( $ch, CURLOPT_POST, true ); //set how many paramaters to post
		curl_setopt( $ch, CURLOPT_URL, $url ); //set the url we want to use
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
		curl_exec( $ch ); //execute and get the results
		curl_close( $ch );

		return null;
	}
}
