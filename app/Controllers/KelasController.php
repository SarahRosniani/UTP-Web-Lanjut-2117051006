<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index(){
        $data = [
            'title' => 'List Kelas',
            'users' => $this->kelasModel->getKelas(),
        ];
        return view ('list_kelas', $data);
    }

    public function show($id){
        $user = $this->kelasModel->getKelas($id);

        $data = [
            'title'  => 'Kelas',
            'user'      => $user,
        ];

        return view('kelas', $data);
    }
}
