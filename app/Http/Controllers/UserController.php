<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do usuario com codigo 1</h1>";
    }


    public function getData()
    {
        return "<h1>Disparou ação de Get</h1>";
    }

    public function postData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de Post</h1>";
    }

}
