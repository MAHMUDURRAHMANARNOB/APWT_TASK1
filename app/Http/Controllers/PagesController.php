<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function serviceData(){
        $services = [
            'serviceone' => 'web development',
            'servicetwo' => 'graphics design',
            'servicethree' => 'android development',
            'servicefour' => 'dot net development',
        ];
        return view('pages.service')->with('data',$services);
    }
}
