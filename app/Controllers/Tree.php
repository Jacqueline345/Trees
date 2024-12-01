<?php

namespace App\Controllers;
use App\Models\TreeModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Tree extends BaseController
{
    private $db;
    private $treeModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->treeModel = model(TreeModel::class);
    }
    public function addTree(): string
    {
        $arboles = isset($_SESSIO['arboles']) ? $_SESSION['arboles'] : null;
        $error_msg = isset($_GET['error']) ? $_GET['error'] : '';
        $datos['arboles'] = $arboles;
        $datos['error_msg'] = $error_msg;
        $datos['title'] = 'Registro de arboles';
        return view('shared/headerAdmin', $datos).view('arbol/addTree',$datos).view('shared/footer');
    }
    public function create()
    {
        $datos = ['especie' => $this->request->getPost('especie'), 'nombre_cientifico' => $this->request->getPost('nombre_cientifico'),
          'tamaño' => $this->request->getPost('tamaño'), 'ubicacion_geografica' => $this->request->getPost('ubicacion_geografica'),
          'precio' => $this->request->getPost('precio'), 'foto' => $this->request->getPost('foto')];

        $this->treeModel->insert($datos);
    }
}
