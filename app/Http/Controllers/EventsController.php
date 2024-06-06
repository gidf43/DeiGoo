<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
        Carros,Category,
        Precos,Planos
};
use DB;
use Carbon\Carbon;

class EventsController extends Controller
{


    // usar na inserção de imagem no banco de dados images/bg_1.jpg


    public function index(){
    
        $preco = Precos::pluck('id');
        $cars = Carros::WhereIn('preco_id',$preco)->get();
      
       $carro = Carros::get();
       //$planos = Planos::get();'plano'=>$planos

        return view('welcome',['cars' => $cars,'carro'=>$carro,]);
    }

    public function contactos(){

        return view("contactos");
    }

    public function DetailsCar($id){

    $detail = Carros::where('id',$id)->first();

    $preco = Precos::pluck('id');
    $cars = Carros::WhereIn('preco_id',$preco)->limit(6)->get();
       
        return view('details',['detail'=>$detail,'cars'=>$cars]);

    }
}
