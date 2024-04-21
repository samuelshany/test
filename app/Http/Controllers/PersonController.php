<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::get();
        return view('users',get_defined_vars());
    }
    public function create()
    {
        return view('createPerson');

    }
    public function store(Request $request)
    {
        Person::create($request->except('_token'));
        return redirect()->back();
    }
    public function show($id)
    {
        $person = Person::where('id',$id)->first();
        $persons = Person::get();
        return view('user',get_defined_vars());
    }
    public function delete($id)
    {
        Person::where('id',$id)->delete();
        return redirect()->back();
    }
}
