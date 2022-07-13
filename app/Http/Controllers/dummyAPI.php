<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return["name"=>"zulharith","email"=>"zulharith1995@gmail.com"];
    }
}
