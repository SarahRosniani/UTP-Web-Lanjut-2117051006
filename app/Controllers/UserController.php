<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public function index() : string
    {
        //
    }

    public function create(): string
    {
        $kelas  = [
            [
                'id'        => 1,
                'nama_kelas'    => 'A',
            ],
            [
                'id'        => 2,
                'nama_kelas'    => 'B',
            ],
            [
                'id'        => 3,
                'nama_kelas'    => 'C',
            ],
            [
                'id'        => 4,
                'nama_kelas'    => 'D',
            ],

        ];

        session();
        $data = [
            'kelas' => $kelas,
            'nama' => $nama,
            'npm' => $npm,
            'validation' => \Config\Services::validation()
        ];

        return view('create_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = ''): string
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];

        return view('profile', $data);
    }

    public function store(): string
    {
        $userModel = new UserModel();

        $userModel->saveUser([
            'nama'  => $this->request->getVar('nama'),
            'id_kelas'  => $this->request->getVar('kelas'),
            'npm'       => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama'      => $this->request->getVar('nama'),
            'kelas'      => $this->request->getVar('kelas'),
            'npm'      => $this->request->getVar('npm'),
        ];
        return view('profile' , $data);
    }


}
