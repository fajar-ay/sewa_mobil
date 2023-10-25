<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admins extends BaseController
{
    public function supir()
    { //define("ENVIRONMENT","development");
        echo "ini controllers Admin saja";
        $data = [
            'title' => 'Daftar Sopir'

        ];
        return view('admin/supir', $data);
    }
    public function haha()
    {
        echo "hahahaha";
    }
}
