<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //promos
    public function promos ()
    {
        return view('assets.promos');
    }
    //contact us
    public function contactus ()
    {
        return view('assets.contactus');
    }
}
