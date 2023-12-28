<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroomingModel;

class Grooming extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new GroomingModel();
        $data = [
          'jenishewan' => request()->getPost('jenishewan'),
          'jenispaket' => request()->getPost('jenispaket'),
          'harga' => request()->getPost('harga'),
          'lokasi' => request()->getPost('lokasi')
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }      $id=$r;
        if($r != false){
            $this->terimaFile($id);
            return redirect()->to(base_url('grooming'));
        }
     }
 
     public function show(){
         $m = new GroomingModel();
 
         return view('grooming/tampildata', [
             'data_grooming' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('grooming/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new GroomingModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('grooming'));
     }
 
     public function edit($id){
         $m = new GroomingModel();
         $data = $m->where('id', $id)->first();
         return view('grooming/form', [
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
