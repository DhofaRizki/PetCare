<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;

class Dokter extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new DokterModel();
        $data = [
          'nama' => request()->getPost('nama'),
          'notlp' => request()->getPost('notlp'),
          'jadwal' => request()->getPost('jadwal'),
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
            return redirect()->to(base_url('dokter'));
        }
     }
 
     public function show(){
         $m = new DokterModel();
 
         return view('dokter/tampildata', [
             'data_dokter' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('dokter/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new DokterModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('dokter'));
     }
 
     public function edit($id){
         $m = new DokterModel();
         $data = $m->where('id', $id)->first();
         return view('dokter/form', [
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
