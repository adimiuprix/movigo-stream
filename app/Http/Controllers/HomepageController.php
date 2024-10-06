<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function __construct()
    {
    }

    public function homepage()
    {
        $data = [
            'title' => 'Judul halaman',
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('home', $data);
    }

    public function movies()
    {
        $movieModel = new Movie();
        
        $data = [
            'movies' => $movieModel::all(),
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('movies', $data);
    }

    public function movplay(Request $request)
    {
        $slug = $request->query('detail');

        $data = [
            'mv' => (new Movie())->where(column: 'slug', operator: $slug)->first(),
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view (view: 'movplay', data: $data);
    }

    public function about(): void
    {

    }

}
