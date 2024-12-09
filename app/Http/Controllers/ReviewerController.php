<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Http\Request;

class reviewerController extends Controller
{
    public function index() {
        $reviewers = Reviewer::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('reviewer.index', compact('reviewers'));
    }

    public function create() {
        return view('reviewer.create');
    }

    public function store(Request $request) {
        Reviewer::create($request->all());

        //return redirect()->route('reviewers.index');
    }

    public function show(Reviewer $reviewer) {

        //return view('reviewers.show', compact('reviewer'));
    }

    public function edit(Reviewer $reviewer) {
        //return view('reviewers.edit', compact('reviewer'));
    }

    public function update(Request $request, Reviewer $reviewer) {
        $reviewer->update($request->all());

        //return redirect()->route('reviewers.show', $reviewer);
    }

    public function destroy(Reviewer $reviewer) {
        $reviewer->delete();

        //return redirect()->route('reviewers.index');
    }
}
