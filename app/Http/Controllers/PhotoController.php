<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    public function getPhoto($id)
    {
        $response = Http::get("https://api.unsplash.com/photos/{$id}", [
            'client_id' => config('services.unsplash.key')
        ]);

        return response()->json($response->json());
    }
}
