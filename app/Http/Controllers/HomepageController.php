<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{

    public function __construct()
    {
    }

    public function homepage()
    {
        $data = [
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('home', $data);
    }

    public function movies(){
        $data = [
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('movies', $data);
    }

    public function movplay(){
        $data = [
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('movplay', $data);
    }

}
