<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pets;

class PetController extends Controller
{
    //show all
    public function index(Request $request){
    if($request -> search){
        $pets = Pets::where('pets', 'LIKE', "%$request->search%")->get();//for query string, search directly the task
        return $pets;
    }
    $pets = Pets::all();
    // return $pets;
    return view('pets.index', [
        'data' => $pets
    ]);
    
    //create
    public function create(){

    }
}
}