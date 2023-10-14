<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    { //define("ENVIRONMENT","development");
        return view('user/index');
    }
    public function pages()
    {
        echo "haha";
    }
}
