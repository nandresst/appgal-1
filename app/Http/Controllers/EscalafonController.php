<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscalafonController extends Controller
{
    //
    public function VerTrabajador()
    {
    	return view('Escalafon/tradatos');
    }
}
