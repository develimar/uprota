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

    public function testPut(Request $request)
    {
        echo "<h1>Usuario da edição é o de codigo 1</h1>";
        var_dump($request);
        return "<h1>Disparou ação de Put</h1>";
    }
    public function testPath(Request $request)
    {
        echo "<h1>Usuario da edição é o de codigo 1</h1>";
        var_dump($request);
        return "<h1>Disparou ação de Path</h1>";
    }

    public function testPathPut(Request $request)
    {
        echo "<h1>Usuario da edição é o de codigo 2</h1>";
        return "<h1>Disparou ação de Path</h1>";
    }


    public function destroy()
    {
        return "<h1>Disparou ação de Delete Para o registro 1</h1>";
    }

}
