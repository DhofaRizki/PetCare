<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PenggunaModel;

class Login extends BaseController
{
    public function form()
    {
        return view('login/form');
    }

    public function login()
    {
        $tingkat = request()->getPost('tingkat');
        if($tingkat == 'ADM'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');

            $m = new AdminModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();

            if($r == null){
                return "Login gagal";
            }else{
                session()->set('admin', $r);
                return redirect()->to(base_url('/'));
            }}
        elseif($tingkat == 'PGN'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');
    
            $m = new PenggunaModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();
    
            if($r == null){
                return "Login gagal";
            }else{
                session()->set('pengguna', $r);
                return redirect()->to(base_url('dashboard/pengguna'));
            }}
    }

    public function signup()
    {
      return view('signup/form');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
