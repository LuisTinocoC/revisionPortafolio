<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;

class AdademicController extends Controller
{
    public function index() {
        $academics = Academic::orderBy('id', 'desc')
                    ->paginate(10);

        // return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        Academic::create($request->all());

        //return redirect()->route('posts.index');
    }

    public function show(Academic $academic) {

        //return view('posts.show', compact('post'));
    }

    public function edit(Academic $academic) {
        //return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Academic $academic) {
        $academic->update($request->all());

        //return redirect()->route('posts.show', $post);
    }

    public function destroy(Academic $academic) {
        $academic->delete();

        //return redirect()->route('posts.index');
    }
}
