<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class Barang extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new BarangModel();
        $data = [
          'namabarang' => request()->getPost('namabarang'),
          'jenis' => request()->getPost('jenis'),
          'harga' => request()->getPost('harga'),
          'lokasi' => request()->getPost('lokasi'),
          'detail' => request()->getPost('detail'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
             $id=$r;
        }
        if($r != false){
            $this->terimaFile($id);
            return redirect()->to(base_url('barang'));
        }
     }
 
     public function show(){
         $m = new BarangModel();
 
         return view('barang/tampildata', [
             'data_barang' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('barang/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new BarangModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('barang'));
     }
 
     public function edit($id){
         $m = new BarangModel();
         $data = $m->where('id', $id)->first();
         return view('barang/form', [
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
