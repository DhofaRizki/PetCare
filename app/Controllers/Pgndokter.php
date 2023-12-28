<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;

class Pgndokter extends BaseController
{
    public function index()
    {
        //
    }

    public function show()
    {
        $m = new DokterModel();
 
        return view('pgndokter/tampildata',[
            'data_dokter' => $m->findAll()
            ]);
    }
}
