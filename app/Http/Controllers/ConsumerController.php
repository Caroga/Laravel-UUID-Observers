<?php

namespace App\Http\Controllers;

use App\Models\Consumer;

class ConsumerController extends Controller
{
    public function index()
    {
        $consumer = Consumer::create([
            'name' => 'Caroga\'s Blog',
            'url' => 'blog.caroga.net',
            'api_token' => 'empty'
        ]);

        dd($consumer['attributes']);
    }
}
