<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function create()
    {
        $title = "Country create";
        return view('country.create', compact('title'));
    }

    public function saveToDatabase(Request $request)
    {
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

        // $name = request()->input('name');
        // $capital = request()->input('capital');
        // $currency = request()->input('currency');
        // $population = request()->input('population');

        // $name = $request->input('name');
        // $capital = $request->input('capital');
        // $currency = $request->input('currency');
        // $population = $request->input('population');

        // first apraoch
        // Country::create([
        //     'name' => $name,
        //     'capital' => $capital,
        //     'currency' => $currency,
        //     'population' => $population
        // ]);

        // 2nd approach
        // $country = new Country;

        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;

        // $country->save();

        // Country::create($request->all());
        Country::create($request->only('name', 'capital', 'currency', 'population'));
        // Country::create($request->except('_toke'));

        // return back();
        return redirect('/country');

    }

    public function showAllCountry()
    {
        $title = "Country List";
        $countries = Country::all();

        return view('country.showallcountry', compact('title', 'countries'));
    }

    public function showContryDetail($id)
    {
        $title = 'country details';
        $country = Country::find($id);

        return view('country.detail', compact('title', 'country'));
    }

    public function edit($id)
    {
        $title = "country edit";
        $country = Country::find($id);

        return view('country.edit', compact('title', 'country'));
    }

    public function update($id)
    {
        $country = Country::find($id);

        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;
        // $country->save();

        $country->update([
            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        return back();
    }
}
