<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $mobilModel;
    public function __construct()
    {
        $this->mobilModel = new UserModel();
        // $driverModel = new
    }
    public function mobil()
    { //define("ENVIRONMENT","development");
        // echo "ini controllers Admin saja";

        $mobil = $this->mobilModel->findAll();
        $data = [
            'title' => 'Daftar Sopir',
            'mobil' => $mobil

        ];



        return view('user/mobil', $data);
    }
    public function detail_mobil($id_mobil)
    {
        echo $id_mobil;
    }
}
