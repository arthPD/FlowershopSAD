<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\newFlowerRequest;
use App\Flower;
use \Input as Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MaintenanceController extends Controller
{
    public function flowers () {

    	$flowers =Flower::all();

    	return view('pages.admin.maintenance.flowers.maintenance-flowers', compact('flowers'));
    }//get and return index of all flowers


     public function bouquets() {
    	return view('pages.admin.maintenance.bouquets.maintenance-bouquets');
    }

     public function events() {
    	return view('pages.admin.maintenance.events.maintenance-events');
    }


}



