<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Signup extends BaseController
{
    

    public function create()
    {
        $model = new PenggunaModel();
        $data = [
          'email' => request()->getPost('email'),
          'katasandi' => request()->getPost('katasandi'),
          'namalengkap' => request()->getPost('namalengkap'),
          'jeniskelamin' => request()->getPost('jeniskelamin'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('login'));
        }
    }
}

