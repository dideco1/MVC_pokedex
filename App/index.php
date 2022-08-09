<?php
include 'Controller/PokemonController.php';
include 'Controller/ElementoController.php';

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

    case '/elemento':
        ElementoController::index();
    break;

    case '/elemento/cadastro':
        ElementoController::form();
    break;

    case '/elemento/save':
        ElementoController::save();
    break;

    case '/elemento/delete':
        ElementoController::delete();
    break;

    case '/elemento/detalhe':
        ElementoController::detalhe();
    break;

    default:
        PokemonController::form();
    break;

}