<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo 'Halo in adalah controller Siswa';
    }

    public function nama()
    {
        echo "ini adalah method nama di controller Siswa";
    }
    public function profil()
    {
        echo 'ini adalah method profil di controller Siswa';
    }
}