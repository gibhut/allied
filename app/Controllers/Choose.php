<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Choose extends BaseController
{
    public function index()
    {
        $data['content'] = "choose_content.php";
        return view('layouts/master',$data);
    }
}
