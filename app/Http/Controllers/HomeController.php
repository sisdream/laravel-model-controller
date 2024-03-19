<?php

namespace App\Http\Controllers;

use Illuminate\Support\Route;
use App\Movie;

class HomeController extends Controller
{
  public function index() {
    $movies = Movie::all();
    return view('home', compact('movies'));
  }
}