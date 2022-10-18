<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS'   => 3103120169,
            'Name'  => 'Novia Dhya Camila',
            'Phone' => '085741014350',
            'Class' => 'XII RPL 5'
        ];
    }
}
