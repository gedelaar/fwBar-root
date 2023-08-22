<?php


namespace App\Controllers;

class BaseBar extends BaseController
{
    public function index()
    {
        return view('welcome');
    }
}
