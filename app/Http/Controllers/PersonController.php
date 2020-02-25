<?php

namespace App\Http\Controllers;

use App\Country;
use App\Person;

class PersonController extends Controller
{
    public function index()
    {
        $title = 'persons list';
        $persons = Person::all();

        return view('persons.index', compact('title', 'persons'));
    }
    public function create()
    {
        $title = 'persons list';
        $countries = Country::all();

        return view('persons.create', compact('title', 'countries'));
    }

    public function store()
    {
        Person::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country_id' => request('country'),
        ]);

        return back();
    }
}
