<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\Marque;
class NopeController extends Controller
{
    //
    public function index()
    {

        $sneakers = Sneaker::where('bestseller', true)->get();

        $marques = Marque::orderBy('name', 'desc')->get();
        //retourner tout les produits
        return view('404', compact('sneakers', 'marques'));
    }
}
