<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq()
    {
        return view('faq', Item::all());
    }
}
