<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategoriaks = response()->json(Kategoriak::all());
        return $kategoriaks;
    }

    public function show($id)
    {
        $kategoriak = response()->json(Kategoriak::find($id));
        return $kategoriak;
    }

    public function delete($id)
    {
        Kategoriak::find($id)->delete();
        return redirect('/kategoriak/list');
    }

    public function store(Request $request)
    {
        $kategoriak = new Kategoriak();
        $kategoriak->nev = $request->nev;
        $kategoriak->save();
        return redirect('/kategoriak/list');
    }

    public function update(Request $request, $id)
    {
        $kategoriak = Kategoriak::find($id);
        $kategoriak->nev = $request->nev;
        $kategoriak->save();
        return redirect('/kategoriak/list');
    }

    public function newView()
    {
        return view('kategoriak.new');
    }

    public function editView($id)
    {
        $kategoriak = Kategoriak::find($id);
        return view('kategoriak.edit', ["kategoriak" => $kategoriak]);
    }

    public function listView()
    {
        $kategoriaks = Kategoriak::all();
        return view("kategoriak.list", ["kategoriaks" => $kategoriaks]);
    }

    public function deleteView()
    {
        $kategoriaks = Kategoriak::all();
        return view("kategoriak.delete", ["kategoriaks" => $kategoriaks]);
    }
}
