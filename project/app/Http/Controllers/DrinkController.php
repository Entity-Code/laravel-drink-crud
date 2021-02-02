<?php

namespace App\Http\Controllers;
use App\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index() {
        $drinks = Drink::all();
        //dd($drinks);
        return view('pages.drinkHome', compact('drinks'));
    }

    public function show($id) {
        $drink = Drink::findOrFail($id);
        //dd($id);
        return view('pages.drinkShow', compact('drink'));
    }

    public function create() {
        return view('pages.drinkCreate');
    }

    
    public function store(Request $request) {  
        $drink = Drink::create($request -> all());
        //dd($request -> all());
        return redirect() -> route('drink-show', $drink -> id);
    }
    
    public function edit($id) {
        $drink = Drink::FindOrFail($id);
        return view('pages.drinkEdit', compact('drink'));
    }
    public function update(Request $request, $id) {
        $drink = Drink::FindOrFail($id);
        $drink -> update($request -> all());

        return redirect() -> route('drink-show', $drink -> id);
    }

    public function delete($id) {
        $drink = Drink::FindOrFail($id);
        $drink -> delete();
        return redirect() -> route('drinks-index');
    }
}  
