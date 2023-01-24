<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home --Rakha',
            'tes' => ['one', 'two', 'three']
        ];

        echo view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About --Rakha'
        ];

        return view('pages/about', $data);
    }
    public function galery()
    {
        $data = [
            'title' => 'Galery --Rakha'
        ];

        return view('pages/galery', $data);
    }
    // public function contact()
    // {
    //     $data = [
    //         'title' => 'Contact --Rakha',
    //         'datacon' => [
    //             [
    //                 'nama' => 'Rakha Dimas Putra',
    //                 'umur' => '19 Tahun',
    //                 'alamat' => 'Jl. Melati Ragunan Ps.Minggu Jakarta Selatan',
    //                 'hobi' => 'Belajar'
    //             ],
    //             [
    //                 'nama' => 'Voki',
    //                 'umur' => '23 Tahun',
    //                 'alamat' => 'Jl. Anggrek Kalibata Jakarta Selatan',
    //                 'hobi' => 'Futsal'
    //             ],
    //             [
    //                 'nama' => 'Marcus Olaf',
    //                 'umur' => '29 Tahun',
    //                 'alamat' => 'Jl. London Setia Budi Jakarta Selatan',
    //                 'hobi' => 'Badminton'
    //             ]
    //         ]
    //     ];

    //     return view('pages/contact', $data);
    // }
}
