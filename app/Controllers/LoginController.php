<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class LoginController extends Controller
{
    public function index()
    {
        return view('login_page'); // Load the login page
    }

    public function authenticate()
    {
        // Get form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Instantiate the UserModel
        $userModel = new UserModel();

        // Fetch user data based on email
        $user = $userModel->where('email', $email)->first();

        // Check if the user exists and verify the password
        if ($user && password_verify($password, $user['password'])) {
            // Start a session and store user data
            session()->set([
                'id' => $user['id'],
                'full_name' => $user['full_name'],
                'email' => $user['email'],
                'logged_in' => true
            ]);

            // Redirect to the user dashboard
            return redirect()->to(base_url('dashboard'));
        } else {
            // If authentication fails, redirect back with an error message
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }
}
