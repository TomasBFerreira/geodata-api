<?php

namespace App\Http\Controllers;

class StatusController extends Controller
{
    public function whatStatus()   
    {   
        return  response()->json(['success' => true]);;
    }
}