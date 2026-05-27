<?php

namespace App\Controllers;

class Turismo extends BaseController
{
    public function catedral()
    {
        return view('templates/header')
            . view('turismo/catedral')
            . view('templates/footer');
    }

    public function palacio()
    {
        return view('templates/header')
            . view('turismo/palacio')
            . view('templates/footer');
    }

    public function mariafumaca()
    {
        return view('templates/header')
            . view('turismo/mariafumaca')
            . view('templates/footer');
    }

    public function teatro()
    {
        return view('templates/header')
            . view('turismo/teatro')
            . view('templates/footer');
    }
}