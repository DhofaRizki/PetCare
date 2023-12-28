<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PgroomingModel;

class Pgrooming extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PgroomingModel();
        $data = [
          
          'namahewan' => request()->getPost('namahewan'),
          'jenishewan' => request()->getPost('jenishewan'),
          'kelamin' => request()->getPost('kelamin'),
          'jenispaket' => request()->getPost('jenispaket'),
          'harga' => request()->getPost('harga'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }      $id=$r;
        if($r != false){
            $this->terimaFile($id);
          return redirect()->to(base_url('pgrooming'));
        }
     }
 
     public function show(){
         $m = new PgroomingModel();
 
         return view('pgrooming/tampildata', [
             'data_pgrooming' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('pgrooming/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PgroomingModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('pgrooming'));
     }
 
     public function edit($id){
         $m = new PgroomingModel();
         $data = $m->where('id', $id)->first();
         return view('pgrooming/form', [
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
