<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function show($bebas) {
        /* die($bebas); */
        return view('welcome', ['title' => $bebas]);
    }
    public function index() {
        return view('main');
    }

    public function about(){
        return view('who.about');
    }

    public function contact() {
        return view('who.contact');
    }

    public function team() {
        return view('who.team');
    }

    public function AdminDashboard() {
        return view('admin.dashboard');
    }
}
