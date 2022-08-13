<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        $data['content'] = "services_content.php";
        return view('layouts/master',$data);
    }
}
