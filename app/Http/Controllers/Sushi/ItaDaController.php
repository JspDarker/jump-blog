<?php

namespace App\Http\Controllers\Sushi;

use App\Http\Requests\StoreSimplePost;
#use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItaDaController extends Controller
{
    //
    public function create()
    {
        return view('storm.create');
    }

    public function store(StoreSimplePost $request)
    {
        $validated = $request->validated();
    }
}
