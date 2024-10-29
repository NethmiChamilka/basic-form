<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Display;

class DisplayController extends Controller
{
    public function create()
    {
        return view('displays.create');  
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        
        Display::create([
            'name' => $request->name,
        ]);

        
        return redirect()->route('displays.create')->with('success', 'User saved successfully.');
    }
}
