<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index(Request $request)
    {
        $query = Lab::where('is_verified', true);
        
        if ($request->filled('city')) {
            $query->where('city', $request->city);
        }
        
        if ($request->filled('service')) {
            $query->whereHas('services', function($q) use ($request) {
                $q->where('category_id', $request->service);
            });
        }
        
        $labs = $query->withCount('services')->paginate(9);
        $cities = Lab::distinct('city')->pluck('city');
        
        return view('labs.index', compact('labs', 'cities'));
    }
    
    public function show($slug)
    {
        $lab = Lab::where('slug', $slug)
                 ->with(['services.category', 'accreditations'])
                 ->firstOrFail();
        
        $lab->increment('views');
        
        return view('labs.show', compact('lab'));
    }
    
    public function services($slug)
    {
        $lab = Lab::where('slug', $slug)->firstOrFail();
        $services = $lab->services()->with('category')->paginate(12);
        
        return view('labs.services', compact('lab', 'services'));
    }
}