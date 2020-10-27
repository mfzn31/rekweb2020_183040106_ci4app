<?php

namespace App\Controllers;

class Pages  extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming Unpas',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Kioro Blok Manggri No. 143',
                    'kota' => 'Cirebon'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Setiabudhi  No. 193',
                    'kota' => 'Bandung'

                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
