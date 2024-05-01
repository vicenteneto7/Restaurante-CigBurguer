<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RestaurantModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        //load restaurants
        $restaurants_model = new RestaurantModel();
        $restaurants = $restaurants_model->select(['id', 'name'])->findAll();
        //dd($restaurants);

        $data['restaurants'] = $restaurants; //chave do lado da view que se transformará em uma variável

        echo view('auth/login_frm', $data);
    }
    public function login_submit()
    {
        echo 'login submit';
    }
    public function logout()
    {
        echo 'logout';
    }
}
