<?php

namespace exercise\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    
    public function about() {
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }
    
    public function services() {
        $title = 'Services';
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Cloud', 'Database']
        );
        return view('pages.services')->with($data);
    }
}
