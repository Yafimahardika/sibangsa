<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = [
            ["id"=>1,"nama"=>"Laptop","harga"=>8000000],
            ["id"=>2,"nama"=>"Mouse","harga"=>150000],
            ["id"=>3,"nama"=>"Keyboard","harga"=>350000],
            ["id"=>4,"nama"=>"Monitor","harga"=>2000000],
            ["id"=>5,"nama"=>"Flashdisk","harga"=>100000],
            ["id"=>6,"nama"=>"Harddisk", "harga"=>500000]
        ];

        return view('katalog.index',
        [
        'produk' =>$produk // 'produk' adalah isi paket dan $produk adalah isi paket
        ]);
    }

    public function show($id)
{
    $produk = [
        1 => ["nama"=>"Laptop","harga"=>8000000],
        2 => ["nama"=>"Mouse","harga"=>150000],
        3 => ["nama"=>"Keyboard","harga"=>350000],
        4 => ["nama"=>"Monitor","harga"=>2000000],
        5 => ["nama"=>"Flashdisk","harga"=>100000],
        6 => ["nama"=>"Hardisk", "harga"=>500000]
    ];

    if (!isset($produk[$id])) {
        abort(404);
    }

    return view('katalog.detail', [
        'data' => $produk[$id]
    ]);
}
}