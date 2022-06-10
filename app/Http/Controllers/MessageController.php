<?php

namespace App\Http\Controllers;

use App\Models\First;
use App\Models\Second;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function first(Request $request)
    {
        $data = new First;
        $data->message = $request->message1;
        $data->save();
        return back()->with('success', 'Message Send To Second Person');
    }

    public function Second(Request $request)
    {
        $data = new Second;
        $data->message = $request->message2;
        $data->save();
        return back()->with('success', 'Message Send To First Person');
    }

    public function showfirst(){

        $data = first::latest('id')->pluck('message')->first();
        // dd($data);
       
        return view('home',compact("data"));


    }

    public function showsecond(){
        
        $var = Second::latest('id')->pluck('message')->first();
    //    dd($var);
      
        return view('welcome',compact("var"));


    }
}
