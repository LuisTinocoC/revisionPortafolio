<?php

namespace App\Http\Controllers;

use App\Models\Curricula;
use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    public function index() {
        $curriculas = Curricula::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('curriculas.index', compact('curriculas'));
    }

    public function create() {
        //return view('curriculas.create');
    }

    public function store(Request $request) {
        Curricula::create($request->all());

        //return redirect()->route('curriculas.index');
    }

    public function show(Curricula $curricula) {

        //return view('curriculas.show', compact('curricula'));
    }

    public function edit(Curricula $curricula) {
        //return view('curriculas.edit', compact('curricula'));
    }

    public function update(Request $request, Curricula $curricula) {
        $curricula->update($request->all());

        //return redirect()->route('curriculas.show', $curricula);
    }

    public function destroy(Curricula $curricula) {
        $curricula->delete();

        //return redirect()->route('curriculas.index');
    }
}
