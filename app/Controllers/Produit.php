<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\categoriesModel;
use App\Models\commandeModel;
use App\Models\produitModel;

class Produit extends BaseController
{
    protected $produit;

    public function __construct()
    {
        $this->produit = new produitModel();
        $this->commande = new commandeModel();
        $this->categorie = new categoriesModel();
    }

    public function index($active = 1)
    {
        $produit = $this->produit->where('active',$active)->findAll();
        $data = ['titre'=>'Liste','donnes' => $produit];

        echo view('header');
        
        echo view('produit/liste', $data);
        
        echo view('footer');
    }

    public function eliminer($active = 0)
    {
        $produit = $this->produit->where('active', $active)->findAll();
        $data = ['titre' => 'Liste en entente restauré', 'donnes' => $produit];

        echo view('header');

        echo view('produit/eliminer', $data);

        echo view('footer');
    }

    public function ajouter()
    {
        $commande = $this->commande->where('active', 1)->findAll();
        $categorie = $this->categorie->where('active', 1)->findAll();
        $data = ['titre'=>'Formulare de produit', 'commande' => $commande, 'categorie' => $categorie];
        echo view('header');
        
        echo view('produit/ajouter', $data);

        echo view('footer');
    }

    public function insertion()
    {
        if($this->request->getMethod() == "post" && $this->validate(['nom_pro' => 'required','quantite' => 'required', 'prix' => 'required', 'prix_unitaire' => 'required', 'total_prix' => 'required', 'existe' => 'required', 'stock' => 'required', 'inventaire' =>'required', 'id_commande' => 'required', 'id_categorie' => 'required'])){
            $this->produit->save(['nom_pro' => $this->request->getPost('nom_pro'), 'quantite' => $this->request->getPost('quantite'), 'prix' => $this->request->getPost('prix'), 'prix_unitaire' => $this->request->getPost('prix_unitaire'), 'total_prix' => $this->request->getPost('total_prix'), 'existe' => $this->request->getPost('existe'), 'stock' => $this->request->getPost('stock'), 'inventaire' => $this->request->getPost('inventaire'), 'id_commande' => $this->request->getPost('id_commande'), 'id_categorie' => $this->request->getPost('id_categorie')]);
            return redirect()->to(base_url() . '/produit');
        }else{
            $data = ['titre' => 'Formulare de produit', 'validation' => $this->validator];
            echo view('header');

            echo view('produit/ajouter', $data);

            echo view('footer');
        }
        
    
    }

    public function editer($id_pro)
    {
        $commande = $this->commande->where('active', 1)->findAll();
        $categorie = $this->categorie->where('active', 1)->findAll();
        $produits = $this->produit->where('id_pro', $id_pro)->first();
        $data = ['titre' => 'Formulare de modification','donnees' => $produits, 'commande' => $commande, 'categorie' => $categorie];
        echo view('header');

        echo view('produit/editer', $data);

        echo view('footer');
    }

    public function modification()
    {
        
        $this->produit->update($this->request->getPost('id_pro'), [
            'nom_pro' => $this->request->getPost('nom_pro'),
            'quantite' => $this->request->getPost('quantite'),
            'prix' => $this->request->getPost('prix'),
            'prix_unitaire' => $this->request->getPost('prix_unitaire'),
            'total_prix' => $this->request->getPost('total_prix'),
            'existe' => $this->request->getPost('existe'),
            'stock' => $this->request->getPost('stock'),
            'inventaire' => $this->request->getPost('inventaire'),
            'id_commande' => $this->request->getPost('id_commande'),
            'id_categorie' => $this->request->getPost('id_categorie')]);
        
        return redirect()->to(base_url() . '/produit');
    }

    public function annuler($id_pro)
    {
        $this->produit->update($id_pro, ['active' => 0]);
        return redirect()->to(base_url() . '/produit');
    }

    public function elimination($id_pro)
    {
        $this->produit->update($id_pro, ['active' => 1]);
        return redirect()->to(base_url() . '/produit');
    }
}