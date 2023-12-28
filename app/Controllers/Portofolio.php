<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\DokterModel;
use App\Models\GroomingModel;

class Portofolio extends BaseController
{
    public function index()
    {
        //
    }

    public function show(){
        $m = new BarangModel();

        return view('portofolio/barang', [
            'data_barang' => $m->findAll()
        ]);
    }

    public function shows(){
        $m = new DokterModel();

        return view('portofolio/dokter', [
            'data_dokter' => $m->findAll()
        ]);
    }

    public function showss(){
        $m = new GroomingModel();

        return view('portofolio/grooming', [
            'data_grooming' => $m->findAll()
        ]);
    }
}
