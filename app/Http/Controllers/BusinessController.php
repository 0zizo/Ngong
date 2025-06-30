<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'is.business'])->except(['index', 'show']);
    }

    public function index()
    {
        $businesses = Business::latest()->paginate(10);
        return view('business.index', compact('businesses'));
    }

    public function create()
    {
        return view('business.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'phone' => 'nullable|string',
        ]);

        Business::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'phone' => $request->phone,
        ]);

        return redirect()->route('business.index')->with('success', 'Business created successfully!');
    }

    public function show(Business $business)
    {
        return view('business.show', compact('business'));
    }

    public function edit(Business $business)
    {
        $this->authorize('update', $business); // Optional policy
        return view('business.edit', compact('business'));
    }

    public function update(Request $request, Business $business)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'phone' => 'nullable|string',
        ]);

        $business->update($request->only(['name', 'description', 'location', 'phone']));

        return redirect()->route('business.index')->with('success', 'Business updated successfully!');
    }

    public function destroy(Business $business)
    {
        $this->authorize('delete', $business); // Optional policy
        $business->delete();

        return redirect()->route('business.index')->with('success', 'Business deleted successfully!');
    }
}
