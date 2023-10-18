<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    const URL = 'https://api.jikan.moe/v4';

    public function genres()
    {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime');

        $json = $response->json();

        $data = $json['data'];

        return view('anime.genres', ['genres' => $data]);
    }

    public function genre($id)
    {
        $endpoint = self::URL . '/anime';

        $data = Http::get($endpoint, ['genres' => $id])->json()['data'];

        $data = \Illuminate\Support\Arr::map($data, function ($anime) {
            return [
                'mal_id' => $anime['mal_id'],
                'title' => $anime['title'],
            ];
        });

        return view('anime.genre', ['anime' => $data, 'categoryId' => $id]);
    }

    public function anime($id, $category_id = null)
    {
        $endpoint = self::URL . '/anime/' . $id;

        $data = Http::get($endpoint)->json()['data'];

        return view('anime.anime', ['anime' => $data, 'categoryId' => $category_id]);
    }
}
