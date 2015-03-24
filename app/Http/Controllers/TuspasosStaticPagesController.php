<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TuspasosStaticPagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('fabi.home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('fabi.about');
	}

	public function whatIs()
	{
		return view('fabi.whatIsReflexology');
	}

	public function session()
	{
		return view('fabi.sessions');
	}

	public function lymph()
	{
		return view('fabi.lymph');
	}

	public function facial()
	{
		return view('fabi.facial');
	}

	public function hand()
	{
		return view('fabi.hand');
	}

	public function testimonials()
	{
		return view('fabi.testimonials');
	}

	public function prices()
	{
		return view('fabi.prices');
	}

	public function contact()
	{
		return view('fabi.contact');
	}
}
