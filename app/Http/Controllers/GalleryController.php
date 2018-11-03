<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    //
    //List Galleries
    public function index(){
      die("gallery/index");
    }

    //Show create Form
    public function create(){
      die("gallery/create");
    }

    //Store
    public function store(Request $request){

    }

    //Show Gallery photos
    public function show($id){
      die($id);
    }
}
