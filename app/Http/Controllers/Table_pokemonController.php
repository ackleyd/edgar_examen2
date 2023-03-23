<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Table_pokemonController extends BaseController
{
    public function index (){
        $page_title = "table pokemon";
        $Table_pokemon = table_pokemon:all();
        return view('pokemon', compact page_title);
    }
    public function index_up60 (){
        $page_title = "table pokemon up 80";
        $up_80 = table_pokemon:where('hp', '=>', '80')->get();
        return view('pokemonup', compact ('page_title', 'up_80'));
    }
    public function index_eq60 (){
        $page_title = "table pokemon equal 80";
        $eq_80 = table_pokemon:where('hp', '<', '80')->get();
        return view('pokemoneq', compact ('page_title', 'eq_80'));
    }
}
