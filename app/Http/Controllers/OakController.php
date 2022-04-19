<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class OakController extends Controller
{
    public function index()
    {
        return view('oak.index');
    }


    public function store(Request $request)
    {
        //dd($request);
        if($request->name != null){
            User::create($request->all());
            return redirect()->route('oak-index')->with('msgOk', 'Enviado com sucesso');
        }else{
            return redirect()->route('oak-index');
        }

    }
}
