<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;

class PagesController extends Controller
{
/**
 * Display a listing of the resource
 * 
 *  @return  \Illuminate Http\Response
 */

public function home()
    {
        return view('home');
    }
    public function about()  //about page to inject into home.blade
    {
        return View::make('pages.about');
    }  
     public function verse()  //resume page to inject into home.blade
    {
        return View::make('pages.verse');
    }  
    public function gallery()  //resume page to inject into home.blade
    {
        return View::make('pages.gallery');
    } 
    public function what()  //resume page to inject into home.blade
    {
        return View::make('pages.what');
    }      
    public function colophon()  //colophon
    {
        return view('colophon');
    }
}