<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class NewsController extends Controller
{
    public function index() {
        $noticias = DB::select('SELECT * FROM news');
        return view('noticias.index', ['noticias' => $noticias]);
    }
    public function create() {
        return view('noticias.create');
    }
    public function store(Request $request)
    {
        $news = News::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'username' => $request->username
        ]);
    
        $user = User::where('username', $request->username)->first(); // Obtém o usuário existente pelo nome de usuário
        $news->user()->associate($user); // Associa a notícia ao usuário existente
    
        $user = User::find($request->username);
        if (!$user) {
            // Retornar erro ou mensagem de validação informando que o username é inválido
            return redirect('noticias')->withErrors(['username' => 'O username informado é inválido.']);
        }
    }
    
    
}

