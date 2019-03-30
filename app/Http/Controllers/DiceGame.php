<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiceGame extends Controller
{
    public function start($max_num = 10)
    {
        return mt_rand(0, $max_num);
    }
}
