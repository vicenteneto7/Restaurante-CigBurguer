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

        //validation errors
        $data['validation_errors'] = session()->getFlashdata('validation_errors');
        //se n exite erros de login, o 'validation_errors' fica vazio ou nulo

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
                    'required' => 'O {field} é obrigatório.',
                    'min_length' => 'O {field} deve ter, no mínimo, {param} caracteres.',
                    'max_length' => 'O {field} deve ter, no máximo, {param} caracteres.',
                ]
            ],
            'text_password' => [
                'label' => 'Senha',
                'rules' => 'required|min_length[6]|max_length[16]',
                'errors' => [
                    'required' => 'A {field} é obrigatória.',
                    'min_length' => 'A {field} deve ter, no mínimo, {param} caracteres.',
                    'max_length' => 'A campo {field} deve ter, no máximo, {param} caracteres.',
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

        if (!$validation) { //se a validação é falsa

            //session()->setFlashdata('select_restaurant', Decrypt($this->request->getPost('select_restaurant')));
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
            //vai redirecionar, voltar pra trás com os inputs q tinha preenchido e com uma mensagem na sessão com o esse código "validation errors" q é uma coleção dos erros q surgirem  $this->validator->getErrors()
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
