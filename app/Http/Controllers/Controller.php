<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */

    public function show(Request $request)
    {
      
        $validation = $request->validate([
            'name'=>'required|integer',
        ]);
        print_r($validation);



    }


    public function store(Request $request)
    {
        
        $usernew = new usernew;

        $usernew->name = $request->name;
        $usernew->surname = $request->surname;

        $usernew->save();

        Mail::to('grneade28@gmail.com')->send(new OrderMailer($usernew));

        return view('show');
    }

    public function index(Request $request)

	{

	$order = Order::findOrFail($request->id);

	Mail::to($mail)->send(new OrderMailer($order));

	}

}

