<?php
namespace app\controllers;

class Home extends Controller
{
    public function anyIndexAction($req, $res)
    {
        return $res->setView('layout', ['content' => 'Bienvenu']);
    }
}