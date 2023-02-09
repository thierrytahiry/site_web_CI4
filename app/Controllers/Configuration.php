<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\configurationModel;

class Configuration extends BaseController
{
    protected $configuration;
    protected $reglas;

    public function __construct()
    {
        $this->configuration = new configurationModel();
        helper(['form']);
        $this->reglas =[
            'nom' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Champ obligatoire'
                ]
            ]
                ];
    }

    public function index($active = 1)
    {
        $nom = $this->configuration->where('nom', 'ordinateur')->first();
        $clavier = $this->configuration->where('nom', 'Clavier')->first();
        $imprimante = $this->configuration->where('nom', 'Imprimante')->first();
        $pc = $this->configuration->where('nom', 'PC')->first();
        $souris = $this->configuration->where('nom', 'Souris')->first();
        $telephone = $this->configuration->where('nom', 'Telephone')->first();
        $data = ['titre'=>'Configuration', 'nom' =>$nom,'clavier' =>$clavier, 'imprimante' => $imprimante, 'pc' => $pc,
            'souris' => $souris, 'telephone' => $telephone];

        echo view('header');
        
        echo view('configuration/configuration',$data);
        
        echo view('footer');
    }

    public function actualisation()
    {
        if($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
            $this->configuration->whereIn('nom',['ordinateur'])->set(['valeur' =>$this->request->getPost('ordinateur')])->update();
            $this->configuration->whereIn('nom', ['Clavier'])->set(['valeur' =>$this->request->getPost('Clavier')])->update();
            $this->configuration->whereIn('nom', ['Imprimante'])->set(['valeur' =>$this->request->getPost('Imprimante')])->update();
            $this->configuration->whereIn('nom', ['PC'])->set(['valeur' =>$this->request->getPost('PC')])->update();
            $this->configuration->whereIn('nom', ['Souris'])->set(['valeur' =>$this->request->getPost('Souris')])->update();
            $this->configuration->whereIn('nom', ['Telephone'])->set(['valeur' =>$this->request->getPost('Telephone')])->update();
            return redirect()->to(base_url() . '/configuration');
        }else {
            // return $this->editer($this->request->getPost('id'), $this->validate);

        }
    }

}