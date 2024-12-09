<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index() {
        $semesters = Semester::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('semester.index', compact('semesters'));
    }

    public function create() {
        return view('semester.create');
    }

    public function store(Request $request) {
        Semester::create($request->all());

        //return redirect()->route('semesters.index');
    }

    public function show(Semester $semester) {

        //return view('semesters.show', compact('semester'));
    }

    public function edit(Semester $semester) {
        //return view('semesters.edit', compact('semester'));
    }

    public function update(Request $request, Semester $semester) {
        $semester->update($request->all());

        //return redirect()->route('semesters.show', $semester);
    }

    public function destroy(Semester $semester) {
        $semester->delete();

        //return redirect()->route('semesters.index');
    }
}
