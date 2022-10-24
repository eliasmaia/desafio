<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Data;

class DataController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $dados = Data::get();
  
        return view('dados', compact('dados'));
    }
       
     /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        $path1 = request()->file('file')->store('temp');
        $path = storage_path('app').'/'.$path1;

        Excel::import(new DataImport, $path);
        
        return back();
    }
    
}