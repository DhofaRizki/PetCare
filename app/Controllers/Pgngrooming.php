<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroomingModel;

class Pgngrooming extends BaseController
{
    public function index()
    {
        //
    }

    public function show()
    {
        $m = new GroomingModel();
 
        return view('pgngrooming/tampildata',[
            'data_grooming' => $m->findAll()
            ]);
    }
}
