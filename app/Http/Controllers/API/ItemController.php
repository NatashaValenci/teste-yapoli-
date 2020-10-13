<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Events\ItemRegister;

class ItemController extends Controller
{
    public function register(RegisterRequest $request)
    {  
        event(new ItemRegister($request->name, $request->description));
    }
} 