<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CD;
use App\Models\Newspaper;
use App\Models\FinalYearProject;
use App\Models\FYP;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->get('type', 'all');
        $sort = $request->get('sort', 'asc');

        $catalogues = match ($type) {
            'book' => Book::orderBy('title', $sort)->get(),
            'cd' => CD::orderBy('title', $sort)->get(),
            'newspaper' => Newspaper::orderBy('title', $sort)->get(),
            'fyp' => FYP::orderBy('title', $sort)->get(),
            default => collect()
                ->merge(Book::all())
                ->merge(CD::all())
                ->merge(Newspaper::all())
                ->merge(FYP::all())
                ->sortBy('title', $sort == 'asc')
        };

        return view('catalogues.index', compact('catalogues', 'type', 'sort'));
    }
}
