<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TreeModel;
use CodeIgniter\HTTP\ResponseInterface;

class TreeList extends BaseController
{
    private $treeModel;
    public function __construct()
    {
        $this->treeModel = model(TreeModel::class);
    }
    public function index()
    {
        $tree = $this->treeModel->findAll();
        $datos2['arboles'] = $tree;
        $datos2['title'] = 'Listado de arboles - Home';
        return view('shared/header',$datos2).view('arbol/trees',$datos2).view('shared/footer'); 
    }
}
