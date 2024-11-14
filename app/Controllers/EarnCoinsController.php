<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class EarnCoinsController extends Controller
{
    public function index(): string
    {
        return view('earn_coins');
    }
}
