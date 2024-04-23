<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        echo view('auth/login_frm');
    }
    public function teste()
    {
        echo view('teste');
    }
}
