<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class NameController extends Controller
{
   public function showmy(Request $request){
    $name=$request->name;
    Client::create([
        'name'=>$name
    ]);
   // return view('result',compact('name'));//
   return redirect('/contact');
   }
}
