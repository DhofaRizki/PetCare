<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PbarangModel;

class Pbarang extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PbarangModel();
        $data = [
          'jenis' => request()->getPost('jenis'),
          'namabarang' => request()->getPost('namabarang'),
          'lokasi' => request()->getPost('lokasi'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }      $id=$r;
        if($r != false){
            $this->terimaFile($id);
          return redirect()->to(base_url('pbarang'));
        }
     }
 
     public function show(){
         $m = new PBarangModel();
 
         return view('pbarang/tampildata', [
             'data_pbarang' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('pbarang/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PBarangModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('pbarang'));
     }
 
     public function edit($id){
         $m = new PBarangModel();
         $data = $m->where('id', $id)->first();
         return view('pbarang/form', [
             'data' => $data
         ]);
    }

    private function terimaFile($id){
        $f = request()->getFile('foto');
        if($f->isFile()){
            $target = WRITEPATH . '/uploads/';
            $f->move($target, $id . '.png');
        }
    }

    public function foto($id){
        $f = file_get_contents(WRITEPATH . '/uploads/' . $id . '.png');
        return response()
                ->setHeader('Content-type', 'image/png')
                ->setBody( $f );
    }
}
