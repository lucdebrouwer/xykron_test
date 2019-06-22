<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function About() {
        return view('pages.about');
    }

    public function Book() {
        return view('pages.book');
    }
}
