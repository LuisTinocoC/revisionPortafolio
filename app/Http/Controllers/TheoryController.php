<?php

namespace App\Http\Controllers;

use App\Models\theory;
use Illuminate\Http\Request;

class TheoryController extends Controller
{
    public function index() {
        $theories = Theory::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('theory.index', compact('theories'));
    }

    public function create() {
        return view('theory.create');
    }

    public function store(Request $request) {
        Theory::create($request->all());

        //return redirect()->route('theorys.index');
    }

    public function show(Theory $theory) {

        //return view('theorys.show', compact('theory'));
    }

    public function edit(Theory $theory) {
        //return view('theorys.edit', compact('theory'));
    }

    public function update(Request $request, Theory $theory) {
        $theory->update($request->all());

        //return redirect()->route('theorys.show', $theory);
    }

    public function destroy(Theory $theory) {
        $theory->delete();

        //return redirect()->route('theorys.index');
    }
}
