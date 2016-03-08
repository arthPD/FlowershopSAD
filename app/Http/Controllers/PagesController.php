<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

use App\Flower;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home () {
      return view('pages.home.home');
    }

	public function flowers () {
      return view('pages.home.flowers');
    }

    public function bouquets () {
    	return view('pages.home.bouquets');
    }

    public function events () {
    	return view('pages.home.events');
    }

   /* public function admin () {
    	return view('pages.admin.admin');
    }*/

    public function maintenance () {

    	return view('pages.admin.maintenance.maintenance');
    }

	public function inventory () {

        $flowers = DB::table('flowers')->get();

        return view('pages.admin.inventory.inventory', compact('flowers'));
    }

    public function report () {
    	return view('pages.admin.report.report');
    }   

}
