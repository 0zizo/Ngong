<?php

namespace App\Http\Controllers;
use App\Models\School;
use Illuminate\Http\Request;
class SchoolController {
    public function index() {
        return view('schools.index', ['schools' => School::all()]);
    }

    public function store(Request $request) {
        School::create($request->only(['name', 'location', 'schedule', 'notices']));
        return redirect()->route('schools.index');
    }
}
