<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index($id) {
        $categorias = Categoria::find($id);
        $produtos = DB::table('produtos')->where('categoria_id', $categorias->id)->get();


        return view('produtos_categoria', compact('produtos', 'categorias', 'id'));
    }
}
