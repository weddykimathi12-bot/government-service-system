<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $requests = DB::table('service_requests')
            ->orderByDesc('created_at')
            ->get();

        $totalRequests = DB::table('service_requests')->count();

        $pendingRequests = DB::table('service_requests')
            ->where('status', 'Pending')
            ->count();

        $inProgressRequests = DB::table('service_requests')
            ->where('status', 'In Progress')
            ->count();

        $resolvedRequests = DB::table('service_requests')
            ->where('status', 'Resolved')
            ->count();

        return view('admin', compact(
            'requests',
            'totalRequests',
            'pendingRequests',
            'inProgressRequests',
            'resolvedRequests'
        ));
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending,In Progress,Resolved',
        ]);

        DB::table('service_requests')
            ->where('id', $id)
            ->update([
                'status' => $validated['status'],
                'updated_at' => now(),
            ]);

        return redirect('/admin')
            ->with('success', 'Request status updated successfully.');
    }
}
