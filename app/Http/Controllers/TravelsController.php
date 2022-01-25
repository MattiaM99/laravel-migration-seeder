<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class TravelsController extends Controller
{
    public function index() {
      $offers = Offer::all();
      return view('offers', compact('offers'));
    }
}