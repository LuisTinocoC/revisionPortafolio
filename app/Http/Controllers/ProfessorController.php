<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index() {
        $professors = Professor::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('professor.index', compact('professor'));
    }

    public function create() {
        return view('professor.create');
    }

    public function store(Request $request) {
        Professor::create($request->all());

        //return redirect()->route('professors.index');
    }

    public function show(Professor $professor) {

        //return view('professors.show', compact('professor'));
    }

    public function edit(Professor $professor) {
        //return view('professors.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor) {
        $professor->update($request->all());

        //return redirect()->route('professors.show', $professor);
    }

    public function destroy(Professor $professor) {
        $professor->delete();

        //return redirect()->route('professors.index');
    }
}
