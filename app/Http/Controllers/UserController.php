<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class UserController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $users = User::get();
  
        return view('users', compact('users'));
    }
       
     /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        $path1 = request()->file('file')->store('temp');
        $path = storage_path('app').'/'.$path1;

        Excel::import(new UsersImport, $path);
        
        return back();
    }
    
}