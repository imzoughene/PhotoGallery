<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    //
    //List Galleries
    public function index(){
      //die("gallery/index");
      //Render view
      //$test = "testing youssef";
      //return view("gallery/index",compact("test"));
      return view("gallery/index");
    }

    //Show create Form
    public function create(){
      //die("gallery/create");
      //Render View
      return view("gallery/create");

    }

    //Store
    public function store(Request $request){

    }

    //Show Gallery photos
    public function show($id){
      die($id);
    }
}
