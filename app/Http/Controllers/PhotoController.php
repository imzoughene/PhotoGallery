<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{


    public function create(){
      die("photo/create");
    }

    //Store
    public function store(Request $request){

    }

    //Show photo details
    public function details($id){
      die($id);
    }
}
