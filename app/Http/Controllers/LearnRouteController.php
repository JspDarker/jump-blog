<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnRouteController extends Controller
{
    public function index() {
        $message = '(Hello world|i am param from controller)';
        return view('params',compact('message'));
    }

    public function go($id) {
        $passParam = 'This is param from route | => '. $id;
        return view('go-param',compact('passParam'));
    }
}
