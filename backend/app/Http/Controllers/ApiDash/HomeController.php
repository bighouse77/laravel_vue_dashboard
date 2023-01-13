<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Professor;
use App\Models\Models\Conteudista;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    public function index() 
    {   
        // READ (Get)
        $professores = Professor::all();
        
        $conteudistas = Conteudista::all();

        return response()->json([
            'professores' => $professores,
            'conteudistas' => $conteudistas,
        ]);
    }

    public function insertData()
    {

        // CREATE
        
        $teste = Professor::create([
            'name' => 'vitor Create',
            'email' => 'teste2',
            'website' => 'teste2.com.br'
        ]);
        
    

        // DELETE
        /*
        $teste = Professor::where('email', '=', 'teste')->delete();
        */


        // UPDATE
        /*
        $teste = Professor::find(19);
        $teste->name = 'Teste alterado';
        $teste->email = 'email alterado';
        $teste->website = 'alterado';
        $teste->save();
        */
    }
}
