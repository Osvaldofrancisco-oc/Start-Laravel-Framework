<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.contacto.index');
    }

    public function contact(Request $request)
    {
        dd($request->all());
    }

   

 

    
}
