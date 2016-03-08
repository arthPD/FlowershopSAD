<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use \Input as Input;
use App\User;

class SessionsController extends Controller
{

  
    public function store () {

    	$input = Input::all();

    	$attempt = Auth::login([

    		'username' => $input['username'],
    		'password' => $input['password']
    	]);

    	if($attempt) return Redirect::intended('pages.admin.maintenance.maintenance');

    	dd('wew');
    }

    public function create () {

    	return view('pages.admin.admin');
    }

    public function destroy () {

    	return View::make('sessions.destroy');
    }
}
