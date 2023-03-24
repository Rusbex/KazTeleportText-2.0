<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    public function show(Photo $photo)
    {
//        return dd($photo);
//        dd($photo);
        return view('show', [
            'photo' => $photo,
        ]);
    }
}
