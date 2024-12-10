<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class reviewerController extends Controller
{
    public function index() {
        $reviewers = Reviewer::all();

        return view('reviewers.index', compact('reviewers'));
    }

    public function create() {
        return view('reviewers.create');
    }

    public function store(Request $request) {
        Reviewer::create($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $user->save();

        // Procesar los datos validados
        return redirect()->route('reviewers.index')
                         ->with('mensaje', 'Revisor creado con éxito');
    }

    public function show(Reviewer $reviewer) {
        $reviewer = Reviewer::find($reviewer->id);
        return view('reviewers.show', compact('reviewer'));
    }

    public function edit(Reviewer $reviewer) {
        $reviewer = Reviewer::find($reviewer->id);
        return view('reviewers.edit', compact('reviewer'));
    }

    public function update(Request $request, Reviewer $reviewer) {
        $reviewer->update($request->all());

        return redirect()->route('reviewers.show', $reviewer);
    }

    public function destroy(Reviewer $reviewer) {
        $reviewer->delete();

        return redirect()->route('reviewers.index');
    }
}
