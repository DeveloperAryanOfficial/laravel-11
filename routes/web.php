<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;        // adding cotroller here to use controller
use App\Http\Middleware\AssignMidlle1;
use App\Http\Middleware\AuthenticationCheck;
use App\Http\Middleware\FirstCheck;
use App\Http\Middleware\SecondCheck;
use App\Http\Middleware\AssignMidlle2;


Route::get('/', function () {
    return view('welcome');
});

Route::get('routing-example/{id}', function ($id) {
    return view('routing-example', ['id' => $id]);
});     // Creating a route for the ' routing-example ', and pass data with routing

Route::view('r-example', 'routing-example-2');     // Redirect with routing


// Calling controller from here
Route::get('control-example', [UserController::class, 'ControllerExample']);
Route::get('control-example-2/{name}', [UserController::class, 'ControllerExample2']);
Route::get('nested-example', [UserController::class, 'NestedView']);

// Accessing included subview file accessing with controller and route
Route::get('access-subview', [UserController::class, 'Subview']);

// Creating route for component
Route::get('compo-example', [UserController::class, 'ComponentExample']);

// Creatin a view page for the form page
Route::view('formexample', 'form-example');

// create a post method for the form 
Route::post('formexample', [UserController::class, 'FormExample']);

// Creating a route for the form example 2
Route::view('formexample2', 'form-example-2');

// Creating a route to get value from the user and send to the controller
Route::post('formexample2', [UserController::class, 'FormExample2']);

// Creating a route for the form example 3
Route::view('formexample3', 'form-example-3');

// Creating a route to get value from the user and send to the controller
Route::post('formexample3', [UserController::class, 'FormExample3']);


// Creation route for url generation examples
Route::view('url1', 'url-generation');
Route::view('url2', 'url-generation-2');
Route::view('url3/{name}', 'url-generation-3');

// Create route for named routing examples
Route::view('named1', 'named-route-example');
Route::view('home/sign/register/page/login', 'named-route-example-2')->name('nre');
// Create route for named routing example for controller
Route::get('named', [UserController::class, 'Named2']);

// Now create named route with dynamic data
Route::view('home/sign/register/page/{name}', 'named-route-example-2')->name('nre2');
// Create route for named routing example for controller
Route::get('named', [UserController::class, 'DynamicNamed2']);

// Creating routes for route group with prefix
// In this case urls are very long and write again and again 
// Route::view('home/route/folder/prefix-route-gr-1', 'prefix-route-gr-1');
// Route::get('home/route/folder/prefix-route-gr-2', [UserController::class, 'PrefixGr2']);
// Route::get('home/route/folder/prefix-route-gr-3', [UserController::class, 'PrefixGr3']);

// We can create route group with prefix
// Route::prefix('home/route/folder')->group(function () {
// Route::view('/prefix-route-gr-1', 'prefix-route-gr-1');
// Route::get('/prefix-route-gr-2', [UserController::class, 'PrefixGr2']);
// Route::get('/prefix-route-gr-3', [UserController::class, 'PrefixGr3']);
// });

// Creating routes for route group with controller
Route::view('prefix/{name}', 'prefix-route-gr-2');
Route::controller(UserController::class)->group(function () {
    Route::get('/prefix-route-gr-2', 'PrefixGr2');
    Route::get('/prefix-route-gr-3', 'PrefixGr3');
});

// Middleware group in one single route
Route::view('middle1','middleware-example')->middleware('MiddleGroup');

// middleware group in group route
Route::middleware('MiddleGroup')->group(function(){
    Route::view('middle2','middleware-example-2');
    Route::view('middle3','middleware-example-3');
});


// Now i am going to assign single and multiple middlewares to the single route ]
// Route::view('assignmiddle1','assign-middle-ex-1')->middleware(AssignMidlle1::class);

// Now assigning multiple middleware
Route::view('assignmiddle1','assign-middle-ex-1')->middleware(AssignMidlle1::class,AssignMidlle2::class);

// Now from here we are going to start learning with DB
// Now creating a route for the controller 
Route::get('datafromdb',[UserController::class,'DataFromDB']);


// Creating route for the model to test a function
Route::get('/students',[UserController::class,'Test']);

// Creating a route to add api which is calls by the http 
Route::get('apicalling',[UserController::class,'ApiCall']);


// Creating a route for Query builder
Route::get('query',[UserController::class,'QueryBuilder']);


// Creating a route for eloquent query builder
Route::get('eloquentquery',[UserController::class,'Eloquent']);




// 
