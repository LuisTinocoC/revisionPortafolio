<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Portfolio::all();

        // ReferenciaCarpeta.Nombre
        return view('portfolio.index', compact('portfolios'));
    }

    public function create() {
        return view('portfolio.create');
    }

    public function store(Request $request) {
        Portfolio::create($request->all());

        return redirect()->route('portfolio.index');
    }

    public function show(Portfolio $portfolio) {

        //return view('portfolio.show', compact('portfolios'));
    }

    public function edit(Portfolio $portfolio) {
        //return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio) {
        $portfolio->update($request->all());

        //return redirect()->route('portfolios.show', $portfolio);
    }

    public function destroy(Portfolio $portfolio) {
        $portfolio->delete();

        //return redirect()->route('portfolios.index');
    }
}
