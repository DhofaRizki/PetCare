<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        //
    }

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
          return redirect()->to(base_url('pengguna'));
        }
     }
 
     public function show(){
         $m = new PenggunaModel();
 
         return view('pengguna/tampildata', [
             'data_pengguna' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('pengguna/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PenggunaModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('pengguna'));
     }
 
     public function edit($id){
         $m = new PenggunaModel();
         $data = $m->where('id', $id)->first();
         return view('pengguna/form', [
             'data' => $data
         ]);
        }
}
