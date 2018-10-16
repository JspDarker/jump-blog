<?php

namespace App\Http\Controllers\Sushi;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSimplePost;

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
