<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data['content'] = "about_content.php";
        return view('layouts/master',$data);

    }
}
