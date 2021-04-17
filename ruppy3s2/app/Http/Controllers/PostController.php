<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PostController extends Controller
{
    public function show($id)
    {
        return view('pages.post');
    }
}
