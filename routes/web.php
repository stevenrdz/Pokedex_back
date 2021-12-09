<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


//Lista de Pokemones - Region kanto
$router->get('/pokemon', 'PokedexController@listarPokemon');

//Detalles de Pokemones
$router->get('/pokemon/especie/{id}', 'PokedexController@detallePokemon');

//Habilidades de Pokemones
$router->get('/pokemon/habilidades/{id}', 'PokedexController@habilidadesPokemon');

//Habilidad - > Poder Solar
$router->get('/pokemon/habilidadSolar/', 'PokedexController@habilidadSolarPokemon');




