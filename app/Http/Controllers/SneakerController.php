<?php

namespace App\Http\Controllers;
use App\Models\Sneaker;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
    public function index(){
     $sneakers = Sneaker::all();

        return view('sneakers.index', compact('sneakers'));
    }
    public function show($id){
        $sneaker = Sneaker ::findorfail($id);

        return view('sneakers.show', compact('sneaker'));
    }
}
