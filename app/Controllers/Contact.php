<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data['content'] = "contact_content.php";
        return view('layouts/master',$data);
    }
}
