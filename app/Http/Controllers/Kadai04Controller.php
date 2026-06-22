<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kadai04Request;

use Illuminate\Support\Facades\Session;
class Kadai04Controller extends Controller
{
         public function index()
    {
        // if(Session::has('inputData'){
        //     $data=Session::get('inputdata')
        //  Seeeion::forget('')

        //     })
        return  view('kadai04_1');
    }

             public function POST(Kadai04Request $request)
    {



        $request->session()->regenerateToken();




        $result['course']=$request->input('course');
        $result['name']=$request->input('name');
        $result['email']=$request->input('email');
        $result['title']=$request->input('title');
        $result['note']=$request->input('note');

Section::put('inputData',$result);


        return  view('kadai04_2',compact('result'));
    }
}
