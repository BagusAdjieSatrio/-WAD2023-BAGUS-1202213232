<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create() {
        return view('showroom.create');
    }

    public function store(request $request){
    $data = $request->all();

    Showroom :: create([
        'id' -> $data['id'],
        'nama_mobil' -> $data['nama mobil'],
        'brand_mobil' -> $data['brand mobil'],
        'warna_mobil' -> $data['warna mobil'],
        'tipe_mobil'-> $data['tipe mobil'],
        'harga_mobil'-> $data['harga mobil'],
    ]);
    return redirect(route('Showroom.index'));
    }
    //

    public function index(){
        $Showroom = Showroom:: all();
        
        return view ('Showroom/index', compact('Showroom'));
    }
}