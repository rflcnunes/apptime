<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $response = \GoogleMaps::load('distancematrix')
            ->setParam ([
                'destinations' => 'sao leopoldo, rs',
                'origins' => 'porto alegre, rs',
                'mode' => 'walking',

                // 'origins' =>'porto alegre',
                // 'destinations' => 'sao leopoldo',
                // 'avoid' => 'tolls',
                // 'departure_time' => 'now',
                // // 'traffic_model' => 'best_guess',
                // // // transit mode options: bus, subway, train, tram, rail
                // 'traffic_model' => 'walking',
            ])
            ->get();

        return $response;
    }

    public function calculateDistanceBetweenTwoPoints()
    {
        $response = \GoogleMaps::load('distancematrix')
            ->setParam ([
                'origins' =>'santa cruz',
                'destinations' => 'santa cruz'
            ])
            ->get();

        return $response;
    }
}
