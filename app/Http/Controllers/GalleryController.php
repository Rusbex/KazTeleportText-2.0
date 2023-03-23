<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.unsplash.com/photos', [
            'client_id' => config('services.unsplash.key'),
            'per_page' => 15,

        ]);

        $photos = $response->json();
//        dd($photos); // добавлено для отладки

        return view('home', [
            'photos' => $photos,
        ]);
    }
    public function getPhoto($id)
    {
        $response = Http::get("https://api.unsplash.com/photos/{$id}", [
            'client_id' => 'your_access_key'
        ]);

        return response()->json($response->json());
    }

    public function getNextPhotos(Request $request)
    {
        $page = $request->input('page');
        $per_page = 15; // количество фотографий, которое нужно получить за один запрос
        $client_id = env('UNSPLASH_ACCESS_KEY');
        $url = 'https://api.unsplash.com/photos?page=' . $page . '&per_page=' . $per_page . '&client_id=' . $client_id;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return response()->json(['success' => false, 'message' => 'Ошибка при выполнении запроса']);
        } else {
            return response()->json(json_decode($response), 200);
        }
    }
}
