<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;

class ChampionController extends Controller
{
    //
    public function index(){
        $champions = Champion::all();
        return view('champions.index', compact('champions'));
    }
    public function view($id){
        $champion = Champion::find($id);
        return view('champions.view', compact('champion'));

    }
    public function create(){
        $champions = Champion::all();
        return view('champions.create');

    }
    public function update(){
        return view('champions.update');

    }
    public function delete(){
        return view('champions.delete');

    }
    public function terminate(){
        return view('champions.terminate');

    }

}
