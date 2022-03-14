<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function index () {
        $animals = Animal::all();
        return view('pages.animal', compact('animals'));
    }

    public function create () {
        $animals = Animal::all();
        return view('pages.createAnimal', compact('animals'));
    }

    public function store (Request $request){
        $store = new Animal;
        $store->name = $request->name;
        $store->type = $request->type;
        $store->color = $request->color;
        $store->save();
        return redirect('/animal/create');
    }

    public function show ($id) {
        $show = Animal::find($id);
        return view('pages.show', compact('show'));
    }

    public function destroy ($id) {
        $delete = Animal::find($id);
        $delete->delete();
        return redirect('/');
    }

    public function edit ($id) {
        $edit = Animal::find($id);
        return view('pages.editAnimal', compact('edit'));

    }

    public function update ($id, Request $request) {
        $update = Animal::find($id);
        $update->name = $request->name;
        $update->type = $request->type;
        $update->color = $request->color;
        $update->save();
        return redirect('/');
    }




}
