<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show()
    {
        return view('pages.home');
    }
    public function Index(Request $request, $Page)
    {
        if (view()->exists('pages.'.$Page)) {
            $view = 'pages.'.$Page;
        } else {
            $view = 'pages.404';
        }
        //return view('pages.index')->with('page', $Page);
        return view($view, [
            'page' => $Page,
        ]);
    }
}
