<?php

namespace App\Http\Controllers;

class InfoWebController
{
    public function info_app()
    {
        $metadata = (object)[
            'title' => 'Movigo',
            'author' => 'Adimiuprix',
            'keywords' => 'movie streamming, Streamming, movigo, web strimming, movie list',
            'description' => 'Movigo – Online Movies, TV Shows & Cinema',
        ];
        return $metadata;
    }

    public function genre(){
        $genres = [
            [
                'g_name' => 'Action',
                'slug' => 'action',
            ],
            [
                'g_name' => 'Comedy',
                'slug' => 'comedy',
            ],
            [
                'g_name' => 'Horor',
                'slug' => 'horor',
            ],
        ];
        return $genres;
    }
}
