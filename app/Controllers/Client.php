<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\clientModel;

class Client extends BaseController
{
    protected $client;

    public function __construct()
    {
        $this->client = new clientModel();
    }

    public function index($active = 1)
    {
        $client = $this->client->where('active',$active)->findAll();
        $data = ['titre'=>'Liste','donnes' => $client];

        echo view('header');
        
        echo view('client/liste', $data);
        
        echo view('footer');
    }

    public function eliminer($active = 0)
    {
        $client = $this->client->where('active', $active)->findAll();
        $data = ['titre' => 'Liste en entente restauré', 'donnes' => $client];

        echo view('header');

        echo view('client/eliminer', $data);

        echo view('footer');
    }

    public function ajouter()
    {
        $data = ['titre'=>'Formulare de client'];
        echo view('header');
        
        echo view('client/ajouter', $data);

        echo view('footer');
    }

    public function insertion()
    {
        if($this->request->getMethod() == "post" && $this->validate(['nom' => 'required', 'prenom' => 'required', 'adresse' => 'required', 'email' => 'required', 'telephone' => 'required'])){
            $this->client->save([
                'nom' => $this->request->getPost('nom'),
                'prenom' => $this->request->getPost('prenom'),
                'adresse' => $this->request->getPost('adresse'),
                'email' => $this->request->getPost('email'),
                'telephone' => $this->request->getPost('telephone')]);
            return redirect()->to(base_url() . '/client');
        }else{
            $data = ['titre' => 'Formulare de client', 'validation' => $this->validator];
            echo view('header');

            echo view('client/ajouter', $data);

            echo view('footer');
        }
        
    
    }

    public function editer($id_cli)
    {
        $clients = $this->client->where('id_cli', $id_cli)->first();
        $data = ['titre' => 'Formulare de modification','donnes' => $clients];
        echo view('header');

        echo view('client/editer', $data);

        echo view('footer');
    }

    public function modification()
    {
        $this->client->update($this->request->getPost('id_cli'),[
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'adresse' => $this->request->getPost('adresse'),
            'email' => $this->request->getPost('email'),
            'telephone' => $this->request->getPost('telephone')
        ]);
        return redirect()->to(base_url() . '/client');
    }

    public function annuler($id_cli)
    {
        $this->client->update($id_cli, ['active' => 0]);
        return redirect()->to(base_url() . '/client');
    }

    public function elimination($id_cli)
    {
        $this->client->update($id_cli, ['active' => 1]);
        return redirect()->to(base_url() . '/client');
    }
}