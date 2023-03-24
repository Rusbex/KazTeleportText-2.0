<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $photo_id = $request->input('photo_id');
        $favorite = new Favorite;
        $favorite->photo_id = $photo_id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        return redirect()->back()->with('success', 'Изображение успешно добавлено в избранное!');
    }
}
