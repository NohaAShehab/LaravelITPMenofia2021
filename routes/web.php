<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#route::get ---("url", Anonoymus function(){
#       return view ("welcome")
#})
Route::get('/', function () {
    return view('welcome');
});

Route::get("/student",function(){
   return view("students.student");
});

Route::get("iti",function(){
    return view("iti");
});

Route::get("/homepage",function(){
    return view("homepage");
});

########### Routes

Route::get("/names",function(){

    return "Names";
});

Route::get("/variable",function(){
    $year=2021;
    return $year;
});

Route::get("/namesarray",function(){
    $names=["Merna","sayed","Eman","Mohamed","Amira","Khloud","Esraa",
        "Gehad","Nardeen","Alaa","Ali"];

    $assosArray=["name"=>"Noha","email"=>"nohashehab.iti@gmail.com"];

    return $assosArray;
});

Route::get("/info/{key}",function($key){
    $info= ["name"=>"Noha","email"=>"nohashehab.iti@gmail.com"];

//    $array_keys=array_keys($info);
//
//    if (in_array($key,$array_keys)){
//        return $info[$key];
//    }else{
//        return "Key not found";
//    }


    if (array_key_exists($key,$info)){
        return $info[$key];
    }else{
        return "Key not found";
    }

});


# request parameter
Route::get("/request",function (){
    $requestparam=request();

//    if($requestparam!=[]){
//        return $requestparam;
//
//    }else{
//        return "welcome";
//    }


    #check if the object is not empty

    #request ----> if empty, not empty -->
    if($requestparam!=[]){
      return $requestparam;

    }else{
        return "<h1> Request page called </h1>";
    }
});

Route::get("inforequest",function (){
    $data=request("name");

    if(request("name")){
        return request("name");
    }else{
        return  "name not found";
    }
});

Route::get("plantshome",function(){
   return view("website.plantshome");
});

#routes for aboutus and contact us

Route::get("plants/aboutus",function(){
    return view("website.aboutus");
});

Route::get("plants/contactus",function(){
    return view("website.contactus");
});

Route::get("/test",function(){
    return view("test");
});


Route::get("/students",function(){


    #send parameter to the view
    $names=["Merna","sayed","Eman","Mohamed","Amira","Khloud","Esraa",
        "Gehad","Nardeen","Alaa","Ali","Amira"];

//    $names=[];

    $day="firday";
//    return view("website.student",["data"=>$day]);  # if value can be expressed
    # with string you can print out its value inside blade file using  {{$data}}
    # the output can echoed by echo;
    return view("website.student",["data"=>$names]);

});

Route::get("/posts","App\Http\Controllers\PostsController@postsindex" );

Route::get("/posts/{postid}","App\Http\Controllers\PostsController@getpost");

############# invokable controller
### __invoke


use App\Http\Controllers;
Route::get("/invoke",[Controllers\PlantsController::class,"__invoke"]);
Route::get("/aws","App\Http\Controllers\PlantsController@getAWSTask")
->name("awsroute");


#########################################################
#students route
#
#

//Route::get("allstudnets","App\Http\Controllers\StudentController@getStudents")
//    ->name("allstudents");
//
//Route::get("students/create",[Controllers\StudentController::class,"create"]);
//
//
//#post --> in submitting data
//Route::post("students/submit",[Controllers\StudentController::class,"store"])
//    ->name("student.add");
//
//Route::get("students/{id}",[Controllers\StudentController::class,"show"])
//    ->name("student.show");
//
//## need to retrive a page to display the item
//Route::get("students/{id}/edit",[Controllers\StudentController::class,"edit"])
//    ->name("student.edit");
//
//# need a route to submit update data
//Route::post("students/{id}",[Controllers\StudentController::class,"update"])
//    ->name("student.update");
//
//
//Route::get("students/{id}/delete",[Controllers\StudentController::class,"destroy"])
//    ->name("student.delete");



Route::resource("students",Controllers\StudentsController::class);

#           | GET|HEAD  | std              | std.index   | App\Http\Controllers\StudentsController@index    | web        |
//|        | POST      | std              | std.store   | App\Http\Controllers\StudentsController@store    | web        |
//|        | GET|HEAD  | std/create       | std.create  | App\Http\Controllers\StudentsController@create   | web        |
//|        | GET|HEAD  | std/{std}        | std.show    | App\Http\Controllers\StudentsController@show     | web        |
//|        | PUT|PATCH | std/{std}        | std.update  | App\Http\Controllers\StudentsController@update   | web        |
//|        | DELETE    | std/{std}        | std.destroy | App\Http\Controllers\StudentsController@destroy  | web        |
//|        | GET|HEAD  | std/{std}/edit   | std.edit    | App\Http\Controllers\StudentsController@edit     | web


##########

# get --> just data retrieval (page)
# post --> insert data for the first time ---> request
# put / patch --> update existing data

