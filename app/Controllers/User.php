<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CountryModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    private $db;
    private $countryModel;
    private $userModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->countryModel = model(CountryModel::class);
        $this->userModel = model(UserModel::class);
    }

    public function signup(): string
    {
        $country = $this->countryModel->findAll();

        $usuarios = isset($_SESSION['usuarios']) ? $_SESSION['usuarios'] : null;
        $error_msg = isset($_GET['error']) ? $_GET['error'] : '';
        $data['usuarios'] = $usuarios;
        $data['error_msg'] = $error_msg;
        $data['country'] = $country;
        $data['title'] = 'Registro de Usuario - Home';
        return view('shared/header', $data) . view('users/signup', $data);
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'lastname' => $this->request->getPost('lastname'),
            'phone_number' => $this->request->getPost('phone_number'),
            'username' => $this->request->getPost('username'),
            'address' => $this->request->getPost('address'),
            'country' => $this->request->getPost('country'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role' => 'amigo'
        ];

        $this->userModel->insert($data);
    }
}
