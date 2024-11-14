<?php

namespace App\Controllers;

use App\Models\UserModel; // Make sure you import the UserModel
use CodeIgniter\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register_page'); // Load the registration page
    }

    public function authenticate()
    {
        // Get form data
        $full_name = $this->request->getPost('full_name');
        $mobile_number = $this->request->getPost('mobile_number');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $department = $this->request->getPost('department');
        $instagram_id = $this->request->getPost('instagram_id');
        $profile_link = $this->request->getPost('profile_link');
        $accept_terms = $this->request->getPost('accept_terms'); // Get checkbox value

        // Validate if "Accept Terms" is checked
        if (empty($accept_terms)) {
            // If checkbox is not checked, return with an error message
            return redirect()->back()->with('error', 'You must accept the terms and conditions to register.');
        }

        // Proceed if checkbox is checked
        $userModel = new UserModel();

        // Prepare the data to be inserted
        $data = [
            'full_name' => $full_name,
            'mobile_number' => $mobile_number,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT), // Hash the password
            'department' => $department,
            'instagram_id' => $instagram_id,
            'profile_link' => $profile_link,
        ];

        // Insert data into the database
        if ($userModel->insert($data)) {
            // Successfully inserted, redirect to login page or user dashboard
            return redirect()->to(base_url('login'))->with('success', 'Registration successful! Please login.');
        } else {
            // Handle failure (could log the error)
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }
}
