<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController
{
    public function showCorrectHomepage() {
        
            return view('homepage');
        }
    }

