<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new AdminModel();
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
          return redirect()->to(base_url('admin'));
        }
     }
 
     public function show(){
         $m = new AdminModel();
 
         return view('admin/tampildata', [
             'data_admin' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('admin/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new AdminModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('admin'));
     }
 
     public function edit($id){
         $m = new AdminModel();
         $data = $m->where('id', $id)->first();
         return view('admin/form', [
             'data' => $data
         ]);
        }
}
