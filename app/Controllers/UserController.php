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
        return view('create_user');
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

        $data = [
            'nama'      => $this->request->getVar('nama'),
            'kelas'      => $this->request->getVar('kelas'),
            'npm'      => $this->request->getVar('npm'),
        ];
        return view('profile' , $data);
    }


}
