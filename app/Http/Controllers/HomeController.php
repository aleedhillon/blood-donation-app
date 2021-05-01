<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Donor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $city = $request->city;
        $blood = $request->blood;

        $donors = Donor::with('blood', 'city')
            ->when($city, function ($query, $city) {
                return $query->where('city_id', $city);
            })
            ->when($blood, function ($query, $blood) {
                return $query->where('blood_type_id', $blood);
            })
            ->get();
        $cities = City::all();
        $bloods = BloodType::all();

        return view('home', [
            'donors' => $donors,
            'cities' => $cities,
            'bloods' => $bloods,
            'city_id' => $city,
            'blood_id' => $blood
        ]);
    }
}
