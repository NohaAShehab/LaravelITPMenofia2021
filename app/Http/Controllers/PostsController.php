<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Attributes
    public $posts=[
        "p1"=>["title"=>"post1","body"=>"body1"],
        "p2"=>["title"=>"post2","body"=>"body2"],
        "p3"=>["title"=>"post3","body"=>"body3"],
        "p4"=>["title"=>"post4","body"=>"body4"],
    ];

    function postsindex(){

        return view("website.posts",["posts"=>$this->posts]);
    }

    function getpost ($postid){

        if(array_key_exists($postid,$this->posts)){
            $post=$this->posts[$postid];
            return view("website.singlepost",["data"=>$post]);
        }else{
            #abort(404) built in function redirect to the not found page
//        return abort(404);
            return redirect("plants/aboutus");
        }

    }
}
