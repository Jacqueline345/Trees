<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TreeModel;
use CodeIgniter\HTTP\ResponseInterface;

class TreeDetails extends BaseController
{
    private $db;
    private $treeModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->treeModel = model(TreeModel::class);
    }
    public function treedetail(): string
    {
        $id = $this->request->getPost('id');
        $tree = $this->treeModel->findAll($id);
        $datos3['arboles'] = $tree;
        $datos3['title'] = 'Detalles de arboles';
        return view('shared/headerAdmin',$datos3).view('arbol/treeDetails',$datos3).view('shared/footer');

    }
    public function index()
    {

        $datos3 = ['especie' => $this->request->getPost('especie'), 'nombre_cientifico' => $this->request->getPost('nombre_cientifico'), 
          'tamaño' => $this->request->getPost('tamaño'), 'ubicacion_geografica' => $this->request->getPost('ubicacion_geografica')
          'estado' => $this->request->getPost('estado'), 'precio' => $this->request->getPost('precio'), 'foto' => $this->request->getPost('foto')];

          $this->treeModel->select($datos3);
    }
}
