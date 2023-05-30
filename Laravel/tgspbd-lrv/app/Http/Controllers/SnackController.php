<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snack;

class SnackController extends Controller
{
    //

    public function index()
    {
        return view('snacks', [
            "snacks"=>Snack::all()
        ]);
    }
}
