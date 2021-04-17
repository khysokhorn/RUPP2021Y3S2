<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function aboutPage()
    {
        return view('pages.about');
    }

    public function contactPage(Request $request)
    {
        $success = $request->get('success');
        return view('pages.contact', [
            'success' => $success
        ]);
    }
}
