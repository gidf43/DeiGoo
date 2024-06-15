<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
        Carros,Category,
        Precos,Planos
};
use DB;
use Carbon\Carbon;

class CarrosController extends Controller
{
    public function Carros(Request $request){
        
        $query = Carros::query();
    
        // Check if a search term is provided
        if ($request->has('search') && $request->search != '') {
            $query->where('nome', 'LIKE', '%' . $request->search . '%');

        }
        // Get the list of preco IDs
        $preco_ids = Precos::pluck('id');
    
        // Apply the whereIn condition and paginate
        $car = $query->whereIn('preco_id', $preco_ids)->paginate(6);
        
        
        return view("car", ['car' => $car]);
    }

}
