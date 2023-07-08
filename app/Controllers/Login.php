<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function loginAdmin()
    {
        $data = [
            'title' => 'Admin Login Page',
        ];

        // return view('welcome_message');

        echo view('login/login-admin', $data);
    }
}
