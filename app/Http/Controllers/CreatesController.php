<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
   public function home(){
    //   $articles = Article::all();
    //   echo '<pre>';
    //   print_r($articles);
    //   echo '</pre>';

    $articles = Article::all();
    return view('home',['articles' => $articles]);
   }
}
