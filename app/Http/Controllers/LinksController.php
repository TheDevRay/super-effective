<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function searchLife() {
        $links = [
            [
                'name' => 'Randstad Uitzendbureaus',
                'url'  => 'https://www.randstad.nl'
            ],
            [
                'name' => 'Monsterboard',
                'url'  => 'https://www.monsterbird.nl'
            ],
            [
                'name' => 'Jobbird',
                'url'  => 'https://www.jobbird.nl'
            ],
            [
                'name' => 'StepStone',
                'url'  => 'https://www.stepstone.nl'
            ],
        ];

        return view('leven', compact('links'));
    }
}
