<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * Display Home Page
     *
     * @return Illuminate\Http\Response
     */
    public function Home()
    {
        return view('static_pages/home');
    }

    /**
     * Display Help Page
     *
     * @return Illuminate\Http\Response
     */
    public function Help()
    {
        return view('static_pages/help');
    }

    /**
     * Display About Page
     *
     * @return Illuminate\Http\Response
     */
    public function About()
    {
        return view('static_pages/about');
    }
}
