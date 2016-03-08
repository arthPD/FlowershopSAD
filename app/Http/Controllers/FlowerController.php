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



class FlowerController extends Controller
{
   public function show (Flower $flower) { //show specific flower

        return view('pages.admin.maintenance.flowers.edit-flowers', compact('flower'));
    }

    public function add (NewFlowerRequest $request, Flower $flower) { //add new flower


        $flower = new Flower;

        $flower->name = $request->flowername;
        $flower->desc = $request->flowerdesc;
        $flower->price = $request->flowerprice;
        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('img', $file->getClientOriginalName());
            $flower->fimage = $file->getClientOriginalName();

        }
        $flower->save();
        return redirect('maintenance-flowers')->with('flash_message', 'Flower successfully added!');

    }

    public function edit (Request $request, Flower $flower) { //edit the specific flower

      //  $flower->update($request->all());

       // $edit = Flower::find($flower);
        $flower->name = $request->flowername;
        $flower->desc = $request->flowerdesc;
        $flower->price = $request->flowerprice;
         if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('img', $file->getClientOriginalName());
            $flower->fimage = $file->getClientOriginalName();

        }
        $flower->save();
       return redirect('maintenance-flowers');

    }

}
