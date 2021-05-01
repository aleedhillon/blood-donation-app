<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $bloods = BloodType::all();

        return view('donors.create', [
            'cities' => $cities,
            'bloods' => $bloods
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'age' => ['required'],
            'bio' => ['required'],
            'phone' => ['required'],
            'city' => ['required'],
            'blood' => ['required'],
        ]);

        $user = $request->user();

        $donor = Donor::create([
            'city_id' => $request->city,
            'blood_type_id' => $request->blood,
            'user_id' => $user->id,
            'age' => $request->age,
            'bio' => $request->bio,
            'phone' => $request->phone
        ]);

        return redirect()
            ->route('home')
            ->with('msg', 'You have been added as donor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
