<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {
        $noticias = DB::select('SELECT * FROM news');
        return view('noticias.index', ['noticias' => $noticias]);
    }
}
