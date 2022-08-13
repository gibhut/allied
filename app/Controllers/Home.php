<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['content'] = "home_content.php";
        return view('layouts/master',$data);
    }
}
