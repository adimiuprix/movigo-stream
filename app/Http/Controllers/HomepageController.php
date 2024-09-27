<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InfoWebController;

class HomepageController extends Controller
{
    protected $info_web;

    public function __construct()
    {
        $this->info_web = new InfoWebController();
    }

    public function homepage()
    {
        $data = [
            'meta' => $this->info_web->info_app(),
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('home', $data);
    }

    public function movies(){
        $data = [
            'meta' => $this->info_web->info_app(),
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('movies', $data);
    }

    public function movplay(){
        $data = [
            'meta' => $this->info_web->info_app(),
            'genres' => DB::table('genres')->where('status', 'active')->get()
        ];

        return view ('movplay', $data);
    }

}
