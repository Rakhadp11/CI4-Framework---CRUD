<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Rakha Dimas Putra";
    }
    public function website()
    {
        echo "Ini Websute Kuu";
    }
    public function profil($nama = '', $id = 0)
    {
        echo "Haii nama saya $nama, nomor id saya $id";
    }
}
