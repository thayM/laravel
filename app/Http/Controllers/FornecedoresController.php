<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores(){
        $fornecedores = ['aaa','aaa','aaa'];
        return View('site.fornecedores', compact('fornecedores'));
    }
}
