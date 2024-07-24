<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PieChartController extends Controller
{
    public function index()
    {

        $chartData = [
            'percent' => 79,
            'imagePath' => '/product-image-2/WhatsApp Image 2024-07-13 at 16.42.27_346345ea.jpg',
            'imagePath2' => '/product-image-2/WhatsApp Image 2024-07-13 at 16.24.47_cfccafa3.jpg',
            'imagePath3' => '/images (1).jpeg',
        ];

        return view('welcome', ['chartData' => $chartData]);

    }
}
