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
        //form validation

        $validation = $this->validate([
            'text_username' => [
                'label' => 'Usuário',
                'rules' => 'required|min_length[6]|max_length[16]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'min_length' => 'O campo {field} deve ter, no mínimo, {param} caracteres.',
                    'max_length' => 'O campo {field} deve ter, no máximo, {param} caracteres.',
                ]
            ],
            'text_password' => [
                'label' => 'Senha',
                'rules' => 'required|min_length[6]|max_length[16]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'min_length' => 'O campo {field} deve ter, no mínimo, {param} caracteres.',
                    'max_length' => 'O campo {field} deve ter, no máximo, {param} caracteres.',
                ]
            ],
            'select_restaurant' => [
                'label' => 'Restaurante',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.',
                ]
            ]
        ]);

        if(!$validation){
            dd($this->validator->getErrors());
            //session()->setFlashdata('select_restaurant', Decrypt($this->request->getPost('select_restaurant')));
            //return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        echo 'ok';

        //show restaurant id
        //$restaurant_id = Decrypt($this->request->getPost('select_restaurant'));

        //echo $restaurant_id;
    }
    public function logout()
    {
        echo 'logout';
    }
}
