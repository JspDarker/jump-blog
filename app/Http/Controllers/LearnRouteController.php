<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearnRouteController extends Controller
{
    /*public function index() {
        $message = '(Hello world|i am param from controller)';
        return view('params',compact('message'));
    }

    public function go($id) {
        $passParam = 'This is param from route | => '. $id;
        return view('go-param',compact('passParam'));
    }*/

    public function getDeparts()
    {
        DB::enableQueryLog();
        $depart = Account::find(14)->departments;
        foreach ($depart as $k => $d) {
            echo $d->url,'<br>';
        }
        echo "<pre>";
        print_r(DB::getQueryLog());
        echo "</pre>";die;
    }
}
