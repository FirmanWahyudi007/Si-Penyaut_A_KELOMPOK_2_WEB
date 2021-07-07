<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelApiController extends Controller
{
    public function index()
    {
        # code...
        $artikel = Artikel::all();
        return response()->json($artikel, 201);
    }

    public function show($id)
    {
        # code...
        $artikel = Artikel::find($id)->first();
        return response()->json($artikel, 201);
    }
}