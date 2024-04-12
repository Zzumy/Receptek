<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index()
    {
        $recepteks = response()->json(Receptek::all());
        return $recepteks;
    }

    public function show($id)
    {
        $receptek = response()->json(Receptek::find($id));
        return $receptek;
    }

    public function delete($id)
    {
        Receptek::find($id)->delete();
        return redirect('/receptek/list');
    }

    public function store(Request $request)
    {
        $receptek = new Receptek();
        $receptek->nev = $request->nev;
        $receptek->kat_id = $request->kat_id;
        $receptek->kep_eleresi_ut = $request->kep_eleresi_ut;
        $receptek->leiras = $request->leiras;
        $receptek->save();
        return redirect('/receptek/list');
    }

    public function update(Request $request, $id)
    {
        $receptek = Receptek::find($id);
        $receptek->nev = $request->nev;
        $receptek->kat_id = $request->kat_id;
        $receptek->kep_eleresi_ut = $request->kep_eleresi_ut;
        $receptek->leiras = $request->leiras;
        $receptek->save();
        return redirect('/receptek/list');
    }

    public function newView()
    {
        return view('receptek.new');
    }

    public function editView($id)
    {
        $receptek = Receptek::find($id);
        return view('receptek.edit', ["receptek" => $receptek]);
    }

    public function listView()
    {
        $recepteks = Receptek::all();
        return view("receptek.list", ["recepteks" => $recepteks]);
    }

    public function deleteView()
    {
        $recepteks = Receptek::all();
        return view("receptek.delete", ["recepteks" => $recepteks]);
    }
}
