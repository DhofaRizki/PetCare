<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class Pgnbarang extends BaseController
{
    public function index()
    {
        //
    }

    public function show()
    {
        $m = new BarangModel();
 
         return view('pgnbarang/tampildata',[
        'data_barang' => $m->findAll()
        ]);
    }
}
