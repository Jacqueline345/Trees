<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ListModel;
use CodeIgniter\HTTP\ResponseInterface;

class List extends BaseController
{
    private $listModel;

    public function _construct()
    {
        $this->listModel = model(ListModel::class);
    }
    public function index()
    {
        $arboles = $this->listModel->findAll();
        $datos2['arboles'] = $arboles;
        $datos2['error_msg'] = $error_msg;
        $datos2['title'] = 'Listado de arboles -Home';
        return view('shared/header', $datos2).view('Lista/trees',$datos2).view('shared/footer');
    }
}
