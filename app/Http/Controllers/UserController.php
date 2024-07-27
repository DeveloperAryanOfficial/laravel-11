<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;    // when u r using if statement then add this 
use Illuminate\Support\Facades\DB;      // You can use DB class to fetch the data from the DB
use App\Models\Student;                 // Models are usually used for the fetching data from the DB
use Illuminate\Support\Facades\Http;    // To calling the API, You can use the Http 
use PHPUnit\Framework\MockObject\Builder\Stub;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    function ControllerExample()
    {
        return view('control-example');
    }   // Creating controller 

    function ControllerExample2($data)
    {
        $Username = $data;
        echo "hello everyone"; // you can return this string also 
        return view('control-example-2', ['name' => $Username]);
    }   // Passing data from the route

    function NestedView()
    {
        echo "This is nested view example";
        if (view::exists('nested-view.nested-view-example')) {
            return view('nested-view.nested-view-example');
        }
    }

    function Subview()
    {
        return view('accessing-subview');
    }

    // Creating a function for the component
    function ComponentExample()
    {
        return view('component-example');
    }

    // Create function for requesting the data
    function FormExample(Request $request)
    {
        echo "MY age is $request->age ";
    }

    // Creating a controller to get form 2 data
    function FormExample2(Request $request)
    {
        echo "MY age is $request->gender <br>";
        echo "MY age is $request->city <br>";
        echo "MY age is $request->age ";
        print_r($request->skills);
    }

    function FormExample3(Request $request)
    {
        $request->validate([
            'name' => 'required | uppercase',
            'age' => 'required',
            'email' => 'required | email',
            'gender' => 'required',
            'city' => 'required',
        ]);

        return $request;
    }

    function Named2()
    {
        // return view('named-route-example'); 
        // when will we redirect here we have two methods to redirect
        // return redirect()->to('home/sign/register/page/login');
        return to_route('nre');
    }

    function DynamicNamed2()
    {
        // return view('named-route-example'); 
        // when will we redirect here we have two methods to redirect
        // return redirect()->to('home/sign/register/page/login');
        return to_route('nre2', ['name' => 'aryan']);
    }

    // Creating controller for route group with prefix
    function PrefixGr2()
    {
        return view('prefix-route-gr-2', ['name' => 'aryan']);
    }
    function PrefixGr3()
    {
        return view('prefix-route-gr-3');
    }

    // Creating a function for the data fetching from the db
    function DataFromDB()
    {
        // return 'fetching data from the db';
        // return DB::Select('SELECT * FROM users');

        $users = DB::Select('SELECT * FROM users');
        return view('fetchingInView', ['users' => $users]);
    }


    // Create function for Eloquent Model
    function Test()
    {

        // To use the function of model 
        $data = new \App\Models\Student;
        echo $data->ModelTest();



        $students = \App\Models\Student::all();
        // return $students;    It returns the data on backend page
        return view('eloquent-model-ex-1', ['data' => $students]);
    }

    // Creating a function for the API calling through the controller 
    function ApiCall(){
        // return "api testing";
        $response = Http::get('https://rapidapi.com/googlecloud/api/google-translate1/playground/apiendpoint_7dc1fa13-4c56-4b07-9199-4033d27d5c6b');
        // Here get function takes an argument as link or path

        // return $response->body();
        // return $response->status();
        // return $response->headers();

        // Take it to in view page
        return view('api-exercise',['api'=>$response]);
    }



    // Now we are going to create a function for the query builder 
    function QueryBuilder(){
        // $result = DB::table('users')->get();   To get all data use this 
        // $result = DB::table('users')->where('pass','76676')->get();     To get conditional data use it
        // $result = DB::table('users')->first();  Provide you first data from DB

        // To insert data into DB
        // $result = DB::table('users')->insert([
        //     'pass'=>'123',
        //     'phone'=>'98765123',
        //     'email'=>'aryan@test.com',
        // ]);

        // if(!$result){
        //     return 'Data insertion failed try again to fill the data';
        // }


        // Update the data into the DB
        // $result = DB::table('users')->where('phone','99562273569')->update([
        //     'pass'=>'2344'
            
        // ]);

        // if(!$result){
        //     return 'Data updation failed try again to fill the data';
        // }


        // Delete data into the DB
        $result = DB::table('users')->where('email','aryan@test.com')->delete();

        if(!$result){
            return 'Data delation failed try again to delete the data';
        }
        
    }

    function Eloquent(){
        // return "eloquent model query builder";
        // $response = Student::get();
        // $response = Student::all();
        // $response = Student::first();
        // $response = Student::where('sno','1')->first();
        // In ui case there is array related error then we can create the as array like $respo = [$respo]

        // On the behalf of id 
        // $response = Student::find(1);    It is not working
        // $response = [$response];

        // Insert data 
        // $response = Student::insert([
        //     'name'=>'sandhya',
        //     'pass'=>'98',
        //     'city'=>'banaras',
        // ]);

        // if (!$response) {
        //     return "Insertion failed";
        // }
        // return 'insertion successful';


        // Update data
        // $response = Student::where('sno','2')->update([
        //     'name'=>'puneet',
        //     'pass'=>'9999',
        //     'city'=>'maharajpur',
        // ]);

        // if (!$response) {
        //     return "updation failed";
        // }
        // return 'updation successful';


        // Delete data
        $response = Student::where('sno','1')->delete();

        if (!$response) {
            return "deletion failed";
        }
        return 'deletion successful';
        // return view('eloquent-query-builder',['arrData'=>$response]);
    }
}
