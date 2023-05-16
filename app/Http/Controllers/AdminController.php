<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();

        return view('dashboard.user', compact('data'));

    }

    public function index(){
        return view('dashboard.index');
    }
    
    public function indexEditUser($id){
        $data = User::where('id',$id)->first();
        return view ('dashboard.edit-user', compact('data'));
    }

    public function updateIndex(Request $request , $id){

        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'action' => $request->action,    
        ]);

        return redirect()->route('indexUser')
        ->with('Success', 'Selamat Activity Berhasil Dibuat!');
    }

    public function delete($id){
        User::where('id',$id)->delete();
        return redirect(route('indexUser'));
    }
}
