<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PokedexController extends Controller
{
    
    public function __construct()
    {
        //
    }

    public function listarPokemon(){

        $urlBase = json_decode(file_get_contents(
            'https://pokeapi.co/api/v2/pokedex/2/'), true);

        return response()->json( 
            [ 
                'estado' => true, 
                'msj' => "Consulta exitosa.", 
                'datos' => $urlBase 
            ]);
    }

    public function detallePokemon(Request $request){

        
        $urlBase = json_decode(file_get_contents(
            'https://pokeapi.co/api/v2/pokemon-species/'.$request->id.'/'), true);

        return response()->json( 
            [ 
                'estado' => true, 
                'msj' => "Consulta exitosa.",
                'data' => $urlBase
            ]); 
    }
    
    public function habilidadesPokemon(Request $request){
        $urlBase = json_decode(file_get_contents(
            'https://pokeapi.co/api/v2/pokemon/'.$request->id.'/'), true);

        return response()->json( 
            [ 
                'estado' => true, 
                'msj' => "Consulta exitosa.",
                'data' => $urlBase
            ]); 
    }

    public function habilidadSolarPokemon(){
        $urlBase = json_decode(file_get_contents(
            'https://pokeapi.co/api/v2/ability/solar-power'), true);

        return response()->json( 
            [ 
                'estado' => true, 
                'msj' => "Consulta exitosa.",
                'data' => $urlBase
            ]); 
    }

    
}