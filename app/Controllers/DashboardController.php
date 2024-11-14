<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if the user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        return view('dashboard'); // Render the user dashboard page
    }
}