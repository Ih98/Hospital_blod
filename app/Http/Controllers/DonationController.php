<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donor;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $data = Donation::all();
        return view('dashboard.donations.index', compact('data'));
    }

    public function create()
    {
        $donors = Donor::all();
        return view('dashboard.donations.create', compact('donors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'donor_id' => 'required|exists:donors,id',
            'doctor' => 'required',
            'ta' => 'required',
            'pouls' => 'required',
            'points' => 'required',
            'vol_pre' => 'required',
            'bags' => 'required',
            'reaction' => 'required',
        ]);

        $request->merge([
            'date_donation' => Carbon::now(),
        ]);
        Donation::create($request->all());

        return redirect()->route('dashboard.donations.index');
    }

    public function show($id)
    {
        return view('dashboard.donations.show');
    }

    public function edit($id)
    {
        return view('dashboard.donations.edit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'donor_id' => 'required|exists:donors,id',
            'doctor' => 'required',
            'ta' => 'required',
            'pouls' => 'required',
            'points' => 'required',
            'vol_pre' => 'required',
            'bags' => 'required',
            'reaction' => 'required',
        ]);
    
        $donations = Donation::findOrFail($id);
        $donations->update($request->all());

        return redirect()->route('dashboard.donations.index');
    }

    public function destroy($id)
    {
        $donations = Donation::findOrFail($id);
        $donations->delete();

        return redirect()->route('dashboard.donations.index');
    }
}
