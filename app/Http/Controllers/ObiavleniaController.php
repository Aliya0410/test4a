<?php

namespace App\Http\Controllers;

use App\Models\Obiavlenia;
use Illuminate\Http\Request;

class ObiavleniaController extends Controller
{
    public function index(){
        $obiavlenias = Obiavlenia::all();
        return view("index",compact("obiavlenias"));
    }

    public function store(Request $request){
        $request->validate([
            "name"=> "required|",
            "text"=> "required|",
        ]);

        $obiavlenia = new Obiavlenia();
        $obiavlenia->name = $request->name;
        $obiavlenia->text = $request->text;
        $obiavlenia->save();
        return redirect()->route('posts');

    }
}
