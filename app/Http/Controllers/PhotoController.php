<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class PhotoController extends Controller
{

    public $table = "photos";
    public function create($gallery_id){
      //die("photo/create");
      //Render View
      return view("photo/create",compact("gallery_id"));
    }

    //Store Photo
    public function store(Request $request){

            //Get request input
            $title=$request->input("title");



            $gallery_id=$request->input("gallery_id");
            $description=$request->input("description");
            $location=$request->input("location");
            $image=$request->file("image");



            $owner_id=1;

            //Check image upload
            if($image){
              //die("Yes");
              $image_file_name=$image->getClientOriginalName();
              $image->move(public_path("images"),$image_file_name);
            }else{
              //die("No");
              $image_file_name="noimage.jpg";
            }
            //Insert Photo
            DB::table("photos")->insert(
              [
                "title"       =>$title,
                "description" =>$description,
                "location"    =>$location,
                "gallery_id"  =>$gallery_id,
                "image"       =>$image_file_name,
                "owner_id"    =>$owner_id
              ]
            );

            //return \Redirect::route("photo.index")->with("message","Photo created");
            return \Redirect::route("gallery.index",
            array(
              "message"=>"Photo created",
              "id"=>$gallery_id
            ));

    }

    //Show photo details
    public function details($id){
      die($id);
    }
}
