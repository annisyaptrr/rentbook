<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function storeMassage(request $request){
        $request->validate([
            'name' => 'required',
            'massage' => 'required'
        ]);

        Massage::create($request-all());
        return redirect('/');
    }
}
