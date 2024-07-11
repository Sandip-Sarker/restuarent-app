<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.frontend.home.index');
    }

    public function menu()
    {
        return view('website.frontend.home.menu');
    }

    public function about()
    {
        return view('website.frontend.home.about');
    }

    public function bookTable()
    {
        return view('website.frontend.home.book-table');
    }
}
