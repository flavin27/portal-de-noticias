<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request) {
        $user = User::create($request->all());
        $user->news()->create($request->all());
        return redirect('noticias/create')->with('success', 'deu bom!');

    }
    
}
