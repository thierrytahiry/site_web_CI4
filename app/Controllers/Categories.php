<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\categoriesModel;

class Categories extends BaseController
{
    protected $categorie;

    public function __construct()
    {
        $this->categorie = new categoriesModel();
    }

    public function index($active = 1)
    {
        $categorie = $this->categorie->where('active',$active)->findAll();
        $data = ['titre'=>'Liste','donnes' => $categorie];

        echo view('header');
        
        echo view('categorie/liste', $data);
        
        echo view('footer');
    }

    public function eliminer($active = 0)
    {
        $categorie = $this->categorie->where('active', $active)->findAll();
        $data = ['titre' => 'Liste en entente restauré', 'donnes' => $categorie];

        echo view('header');

        echo view('categorie/eliminer', $data);

        echo view('footer');
    }

    public function ajouter()
    {
        $data = ['titre'=>'Formulare de categorie'];
        echo view('header');
        
        echo view('categorie/ajouter', $data);

        echo view('footer');
    }

    public function insertion()
    {
        $this->categorie->save(['nom_cat' => $this->request->getPost('nom_cat'),'nombre_cat' => $this->request->getPost('nombre_cat')]);
        return redirect()->to(base_url().'/categories');
    }

    public function editer($id_cat)
    {
        $categories = $this->categorie->where('id_cat', $id_cat)->first();
        $data = ['titre' => 'Formulare de modification','donnees' => $categories];
        echo view('header');

        echo view('categorie/editer', $data);

        echo view('footer');
    }

    public function modification()
    {
        $this->categorie->update($this->request->getPost('id_cat'),['nom_cat' => $this->request->getPost('nom_cat'), 'nombre_cat' => $this->request->getPost('nombre_cat')]);
        return redirect()->to(base_url() . '/categories');
    }

    public function annuler($id_cat)
    {
        $this->categorie->update($id_cat, ['active' => 0]);
        return redirect()->to(base_url() . '/categories');
    }

    public function elimination($id_cat)
    {
        $this->categorie->update($id_cat, ['active' => 1]);
        return redirect()->to(base_url() . '/categories');
    }
}