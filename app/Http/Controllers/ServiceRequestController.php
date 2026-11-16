<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $id = DB::table('service_requests')->insertGetId([
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'],
            'service' => $validated['service'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'status' => 'Pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/')
            ->with('success', 'Your service request has been received! Your tracking number is ' . $id);
    }
}
