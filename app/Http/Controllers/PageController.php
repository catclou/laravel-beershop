<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Beer;

class PageController extends Controller
{
    public function index() {

        $beers = Beer::all();

        return view('pages.index' , compact('beers'));
    }

    public function show($id) {

        $beer = Beer::findOrFail( $id );

        return view('pages.show' , compact('beer'));
    }
}
