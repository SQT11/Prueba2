<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
class GameController extends Controller
{
    //
    public function index(){

        //return "Bienvenido a la web que listara los juegos comprados";
        $VideoGames = array('Fifa 23','Dios de la Guerra','Metal Slug','Dirt 3','Super mario');
        return view("index",['games'=>$VideoGames]);
    }

    public function create(){
        //return"Esta es la pagina donde se creara el formulario para dar de alta Juegos , estamos utilizando un controlador";
        return view("create");
    }

    public function decision($name_game,$categoria=null ){
        $date = Now();
        return view("show ", ['nameVideogame'=>$name_game , "categoria"=>$categoria , "fecha"=>$date]);

        // if ($categoria){
        //     return "Bienvenido a la Pagina del Juego: ".$name_game." Que pertenece a la categoria ".$categoria;
        // }else{
        //     return "Bienvenido a la Pagina del Juego: ".$name_game;
        // }
    }

}
