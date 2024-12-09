<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index() {
        $practices = Practice::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('practice.index', compact('practices'));
    }

    public function create() {
        return view('practice.create');
    }

    public function store(Request $request) {
        Practice::create($request->all());

        //return redirect()->route('practices.index');
    }

    public function show(Practice $practice) {

        //return view('practices.show', compact('practice'));
    }

    public function edit(Practice $practice) {
        //return view('practices.edit', compact('practice'));
    }

    public function update(Request $request, Practice $practice) {
        $practice->update($request->all());

        //return redirect()->route('practices.show', $practice);
    }

    public function destroy(Practice $practice) {
        $practice->delete();

        //return redirect()->route('practices.index');
    }
}
