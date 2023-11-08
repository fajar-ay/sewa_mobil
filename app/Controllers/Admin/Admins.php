<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DriverModel;

class Admins extends BaseController
{
    protected $driverModel;
    public function __construct()
    {
        $this->driverModel = new DriverModel();
        // $driverModel = new
    }
    public function supir()
    { //define("ENVIRONMENT","development");
        // echo "ini controllers Admin saja";

        $driver = $this->driverModel->findAll();
        $data = [
            'title' => 'Daftar Sopir',
            'driver' => $driver

        ];



        return view('admin/supir', $data);
    }
    public function haha()
    {
        echo "hahahaha";
    }
}
