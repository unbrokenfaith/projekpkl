<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Page',
        ];

        // return view('welcome_message');

        echo view('pages/index', $data);
    }
}
