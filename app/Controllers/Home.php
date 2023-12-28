<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard ()
    {
        return view('dashboard/admin', [
            'admin' => session()->get('admin')]
        );
    }

    public function pdashboard () 
    {
        return view('dashboard/pengguna',[
            'pengguna' => session()->get('pengguna')
    ]);
            
    }
    
    public function maintenance ()
    {
        return view('dashboard/maintenance');
    }
}
