<?php


namespace App\Http\Controllers;
use App\Models\TrafficUpdate;
use Illuminate\Support\Facades\Http;
class TrafficController {
    public function index() {
        $apiKey = env('GOOGLE_MAPS_API_KEY');
        $response = Http::get("https://maps.googleapis.com/maps/api/traffic?location=Ngong&key={$apiKey}");
        $data = $response->json();

        TrafficUpdate::create([
            'location' => 'Ngong',
            'status' =>$data['status'],
            'details' => json_encode($data['details']),
        ]);
        return view('traffic.index', ['updates' => TrafficUpdate::latest()->get()]);}}
