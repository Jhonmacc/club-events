<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{

    public function index(){

$nome = "Jhon";
$idade = 29;
$arr = [10,20,30,40,50];
$nomes= ["Jhon", "Mariana", "Wisley", "Brunão", "Fabricin", "Aline"];
return view("home",
[

    'nome' => $nome,
    'idade' => $idade,
    'pofissao' => "Programador",
    'arr' => $arr,
    'nomes' => $nomes
]);
    }
public function create() {
    return view(('eventos.create'));
}

}
