<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Type;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::first();
        $types = Type::get();

        return view('cinema/index')->with('types', $types);
    }

    public function show(Request $request)
    {
        $search = $request->input('search');
        $type_id = $request->input('type_id');
        $results = Movie::whereIN('movie_type_id', $type_id)
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('rating', 'desc')
            ->simplePaginate(15);
        return view('cinema.movies', compact('results'));
    }
}