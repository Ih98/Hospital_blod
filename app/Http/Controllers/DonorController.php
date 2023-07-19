<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $data = Donor::all();
        return view('dashboard.donors.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.donors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'groupage' => 'required',
            'date_naissance' => 'required|date',
            'sexe' => 'required',
            'type' => 'required|in:Régulier,Irrégulier',
            'lieu_naissance' => 'required',
        ]);

        $donor = Donor::create($request->all());
        $donor->file()->create($request->only(['date_premier_don', 'date_dernier_don']));

        return redirect()->route('dashboard.donors.index');
    }

    public function show($id)
    {
        return view('dashboard.donors.show');
    }

    public function edit($id)
    {
        return view('dashboard.donors.edit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'groupage' => 'required',
            'date_naissance' => 'required|date',
            'sexe' => 'required',
            'type' => 'required|in:Régulier,Irrégulier',
            'lieu_naissance' => 'required',
        ]);

        $donor = Donor::findOrFail($id);
        $donor->update($request->all());

        return redirect()->route('dashboard.donors.index');
    }

    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        $donor->delete();

        return redirect()->route('dashboard.donors.index');
    }
}
