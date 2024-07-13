<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PieChartController extends Controller
{
    public function index()
    {

        $chartData = [
            'percent' => 79,
            'imagePath' => '/Product-image/images.jpeg'
        ];

        return view('welcome', ['chartData' => $chartData]);

    }
}
