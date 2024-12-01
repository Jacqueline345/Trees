<?php

namespace App\Controllers;
use App\Models\CompraModel;
use App\Models\TreeModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Compra extends BaseController
{
    private $db;
    private $compraModel;
    private $treeModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->compraModel = model(CompraModel::class);
    }
    public function compra(): string
    {
        $id = $this->request->getPost('id');
        $row = $this->treeModel->find($id);

        $mis_compras = isset($_SESSION['mis_compras']) ? $_SESSION['mis_compras'] : null;
        $error_msg = isset($_GET['error']) ? $_GET['error'] : '';
        $datos1['arboles'] = $row;
        $datos1['mis_compras'] = $mis_compras;
        $datos1['error_msg'] = $error_msg;
        $datos1['title'] = 'Registro de Compras';
        return view('shared/header',$datos1).view('compras/compra',$datos1).view('shared/footer');

    }
    public function create()
    {
        $datos1 = ['nombre_comprador' => $this->request->getPost('nombre_comprador'), 'especie' => $this->request->getPost('especie'),
          'tamaño' => $this->request->getPost('tamaño'), 'ubicacion_geografica' => $this->request->getPost('ubicacion_geografica'),
          'estado' => $this->request->getPost('estado'), 'precio' => $this->request->getPost('precio'), 'foto' => $this->request->getPost('foto')];

        $this->compraModel->insert($datos1);
    }
}
