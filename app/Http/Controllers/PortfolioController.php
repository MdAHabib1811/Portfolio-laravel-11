<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('portfolio.pages.index');
    }
    public function about()
    {
        return view('portfolio.pages.about');
    }
    public function skill()
    {
        return view('portfolio.pages.skill');
    }
    public function service()
    {
        return view('portfolio.pages.service');
    }
    public function project()
    {
        return view('portfolio.pages.project');
    }
    public function blog()
    {
        return view('portfolio.pages.blog');
    }
    public function blog_detail()
    {
        return view('portfolio.pages.blog_detail');
    }
    public function contact()
    {
        return view('portfolio.pages.contact');
    }
}
