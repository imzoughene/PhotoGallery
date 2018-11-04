<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class GalleryController extends Controller
{
    //
    //List Galleries
    public function index(){
      //die("gallery/index");
      //Render view
      //$test = "testing youssef";
      //return view("gallery/index",compact("test"));



      //Get all galleries
      $galleries=DB::table("galleries")->get();
      return view("gallery/index",compact("galleries"));
    }

    //Show create Form
    public function create(){
      //die("gallery/create");
      //Render View
      return view("gallery/create");

    }

    //Store
    public function store(Request $request){


      //Get request input
      $name=$request->input("name");
      $description=$request->input("description");
      $cover_image=$request->file("cover_image");
      //$cover_image_file_name=$request->file("cover_image")->getClientOriginalName();
      //Input::file('cover_image')->getClientOriginalName();

      $owner_id=1;

      //Check image upload
      if($cover_image){
        //die("Yes");
        $cover_image_file_name=$cover_image->getClientOriginalName();
        $cover_image->move(public_path("images"),$cover_image_file_name);
      }else{
        //die("No");
        $cover_image_file_name="noimage.jpg";
      }
      //Insert GalleryController
      DB::table("galleries")->insert(
        [
          "name"       =>$name,
          "description"=>$description,
          "cover_image"=>$cover_image_file_name,
          "owner_id"   =>$owner_id
        ]
      );

      return \Redirect::route("gallery.index")->with("message","Gallery created");














    }

    //Show Gallery photos
    public function show($id){
      //die($id);
      //Get gallery


      //$gallery=DB::table("galleries")->where("id",$id)->first();
      $gallery=DB::table("galleries")->find($id);


      //Get create_photos_table
      $photos=DB::table("photos")->where("gallery_id",$id)->get();
      //Render View
      return view("gallery/show",compact("gallery","photos"));
    }
}
