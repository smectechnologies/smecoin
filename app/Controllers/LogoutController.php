<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LogoutController extends Controller
{
    public function index()
    {
        // Destroy the session to log out the user
        session()->destroy();

        return redirect()->to(base_url('login'));
    }
}
