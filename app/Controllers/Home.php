<?php namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
		
        echo view('templates/header');
        echo view('pages/home');
        echo view('templates/footer');
    }

    public function sobre()
    {
        echo view('templates/header');
        echo view('pages/sobre');
        echo view('templates/footer');
    }

    public function contato()
    {
        echo view('templates/header');
        echo view('pages/contato');
        echo view('templates/footer');
    }
}
