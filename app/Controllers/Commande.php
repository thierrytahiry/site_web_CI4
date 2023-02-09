<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\commandeModel;

class Commande extends BaseController
{
    protected $commande;

    public function __construct()
    {
        $this->commande = new commandeModel();
    }

    public function index($active = 1)
    {
        $commande = $this->commande->where('active',$active)->findAll();
        $data = ['titre'=>'Liste','donnes' => $commande];

        echo view('header');
        
        echo view('commande/liste', $data);
        
        echo view('footer');
    }

    public function eliminer($active = 0)
    {
        $commande = $this->commande->where('active', $active)->findAll();
        $data = ['titre' => 'Liste en entente restauré', 'donnes' => $commande];

        echo view('header');

        echo view('commande/eliminer', $data);

        echo view('footer');
    }

    public function ajouter()
    {
        $data = ['titre'=>'Formulare de commande'];
        echo view('header');
        
        echo view('commande/ajouter', $data);

        echo view('footer');
    }

    public function insertion()
    {
        if($this->request->getMethod() == "post" && $this->validate(['nombre' => 'required','nombre_com' => 'required'])){
            $this->commande->save(['nombre' => $this->request->getPost('nombre'), 'nombre_com' => $this->request->getPost('nombre_com')]);
            return redirect()->to(base_url() . '/commande');
        }else{
            $data = ['titre' => 'Formulare de commande', 'validation' => $this->validator];
            echo view('header');

            echo view('commande/ajouter', $data);

            echo view('footer');
        }
        
    
    }

    public function editer($id_com)
    {
        $commandes = $this->commande->where('id_com', $id_com)->first();
        $data = ['titre' => 'Formulare de modification','donnees' => $commandes];
        echo view('header');

        echo view('commande/editer', $data);

        echo view('footer');
    }

    public function modification()
    {
        $this->commande->update($this->request->getPost('id_com'),['nombre' => $this->request->getPost('nombre'), 'nombre_com' => $this->request->getPost('nombre_com')]);
        return redirect()->to(base_url() . '/commande');
    }

    public function annuler($id_com)
    {
        $this->commande->update($id_com, ['active' => 0]);
        return redirect()->to(base_url() . '/commande');
    }

    public function elimination($id_com)
    {
        $this->commande->update($id_com, ['active' => 1]);
        return redirect()->to(base_url() . '/commande');
    }
}