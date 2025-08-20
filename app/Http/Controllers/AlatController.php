<?php

namespace App\Http\Controllers;

use App\Models\Alat;

use Illuminate\View\View;

use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index() : View
    {
        //get all products
        $alat = Alat::latest()->paginate(10);

        //render view with products
        return view('alat.index', compact('alat'));
    }
}
