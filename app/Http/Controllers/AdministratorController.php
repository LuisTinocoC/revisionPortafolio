<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index() {
        $administrators = Administrator::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('posts.index', compact('posts'));
    }

    public function create() {
        //return view('posts.create');
    }

    public function store(Request $request) {
        Administrator::create($request->all());

        //return redirect()->route('posts.index');
    }

    public function show(Administrator $administrator) {

        //return view('posts.show', compact('post'));
    }

    public function edit(Administrator $administrator) {
        //return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Administrator $administrator) {
        $administrator->update($request->all());

        //return redirect()->route('posts.show', $post);
    }

    public function destroy(Administrator $administrator) {
        $administrator->delete();

        //return redirect()->route('posts.index');
    }
}
