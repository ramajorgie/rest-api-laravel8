<?php

namespace App\Http\Controllers;

use App\Models\DatauserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;




class getDataController extends Controller
{
    function getData($id = null){

        return $id? DatauserModel::find($id):DatauserModel::all();

    }

    function getApiData(){

        $getData = Http::get('https://reqres.in/api/users?page=2')-> json_decode($getData, true);
        
        return view('welcome',['dataApi'=> $getData]);

    }



}
