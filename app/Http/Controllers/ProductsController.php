<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $datas = [
            1 => [
                'name' => 'White Shirt',
                'type'=> 'Casual Wear',
                'price' => 'Rp50.000',
            ],
            2 => [
                'name' => 'Denim Jacket',
                'type'=> 'Casual Wear',
                'price' => 'Rp100.000',
            ],
            3 => [
                'name' => 'Mermaid Dress',
                'type'=> 'Formal Wear',
                'price' => 'Rp300.000',
            ],
            4 => [
                'name' => 'Yoga Pants',
                'type'=> 'Sports Wear',
                'price' => 'Rp100.000',
            ],
            5 => [
                'name' => 'Tuxedo',
                'type'=> 'Formal Wear',
                'price' => 'Rp300.000',
            ],
            6 => [
                'name' => 'Polkadot Two-Piece Swimsuit',
                'type'=> 'Sports Wear',
                'price' => 'Rp200.000',
            ],
            7 => [
                'name' => 'Midi Skirt',
                'type'=> 'Casual Wear',
                'price' => 'Rp100.000',
            ],
            8 => [
                'name' => 'Pokemon T-Shirt',
                'type'=> 'Casual Wear',
                'price' => 'Rp50.000',
            ]
        ];
        return view('index')->with('datas', $datas);
    }
}
//function() use ($datas){
//    return view('index',['datas' => $datas]);
//}
