<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function index() {
        $role = Auth::user()->role;
        return match ($role) {
            'resident' => view('dashboards.resident'),
            'business' => view('dashboards.business'),
            'school_admin' => view('dashboards.school_admin'),
            'traffic_monitor' => view('dashboards.traffic_monitor'),
            'admin' => view('dashboards.admin'),
            default => redirect()->route('login'),
        };
    }
}
