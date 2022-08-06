<?php
include 'PokemonController.php';

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/pokemon':
        PokemonController::index();
    break;

    case '/pokemon/save':
        PokemonController::save();
    break;

    case '/pokemon/delete':
        PokemonController::delete();
    break;

    case '/pokemon/detalhe':
        PokemonController::detalhe();
    break;

    default:
        PokemonController::form();
    break;

}