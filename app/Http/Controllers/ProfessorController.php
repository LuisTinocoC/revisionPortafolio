<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index() {
        $professors = Professor::all();

        return view('professors.index', compact('professors'));
    }

    public function create() {
        $reviewers = Reviewer::all(); // Obtiene todos los revisores
        return view('professors.create', compact('reviewers'));
    }
    

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:professors,email',
            'password' => 'required|string|min:8',
            'reviewer_id' => 'required|exists:reviewers,id',
            'enabled' => 'required|boolean',
        ]);
    
        // Crear profesor
        Professor::create($request->all());
    
        return redirect()->route('professors.index')->with('success', 'Profesor registrado exitosamente.');
    }
    

    public function show(Professor $professor)
    {
        // Cargar el revisor relacionado
        $professor->load('reviewer'); // Asegúrate de tener la relación `reviewer` configurada en el modelo
    
        return view('professors.show', compact('professor'));
    }
    

    public function edit(Professor $professor)
    {
        // Cargar todos los revisores para el dropdown
        $reviewers = Reviewer::all();
    
        return view('professors.edit', compact('professor', 'reviewers'));
    }
    

    public function update(Request $request, Professor $professor) {
        $professor->update($request->all());

        return redirect()->route('professors.show', $professor);
    }

    public function destroy(Professor $professor) {
        $professor->delete();

        return redirect()->route('professors.index');
    }
}
