<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\LabService;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan Landing Page Utama (Marketplace)
     */
    public function index()
    {
        $categories = ServiceCategory::all();

        $services = LabService::with('lab')
            ->latest()
            ->limit(6)
            ->get();

        $labs = Lab::latest()
            ->limit(6)
            ->get();

        return view('home', compact(
            'categories',
            'services',
            'labs'
        ));

        $clients = Lab::where('is_active', true)
            ->where('is_verified', true)
            ->take(6) // tampilkan 6 saja
            ->get();

        return view('home', compact('clients'));
    }

    /**
     * Fitur Pencarian Global di Landing Page
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        $services = LabService::where('name', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->with(['lab', 'category'])
            ->paginate(12);

        return view('search_results', compact('services', 'query'));
    }
}
