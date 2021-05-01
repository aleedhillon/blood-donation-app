<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Shoutout;
use Faker\Core\Blood;
use Illuminate\Http\Request;

class ShoutoutController extends Controller
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
        $shoutouts = Shoutout::with(['user', 'blood', 'city'])->get();

        // return $shoutouts;

        return view('shoutouts.index', [
            'shoutouts' => $shoutouts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloods = BloodType::all();
        $cities = City::all();
        return view('shoutouts.create', [
            'bloods' => $bloods,
            'cities' => $cities
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
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'min:1'],
            'blood' => ['required', 'min:1']
        ]);

        $user = $request->user();

        $shoutout = Shoutout::create([
            'user_id' => $user->id,
            'blood_type_id' => $request->blood,
            'city_id' => $request->city,
            'description' => $request->description,
            'phone' => $request->phone,
            'specific_address' => $request->address,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoutout  $shoutout
     * @return \Illuminate\Http\Response
     */
    public function show(Shoutout $shoutout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoutout  $shoutout
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoutout $shoutout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoutout  $shoutout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoutout $shoutout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoutout  $shoutout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoutout $shoutout)
    {
        //
    }
}
