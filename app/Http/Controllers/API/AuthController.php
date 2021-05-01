<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json([
            'message'=>'data stored successfully',
            'data'=> $users
        ]);
    }

    public function single_user($id)
    {
        // return User::find($id);
        $single_user = User::find($id);
        return response()->json([
            'message' => 'single user got succesfully',
            'single_user' => $single_user

        ]);
    }

    public function delete_user($id)
    {
        return User::find($id)->delete();
    }

    public function users_input(Request $request){
        // return $request->all();
        // $validate = Validator::make($request->all(),[
        //     "name" => "required",
        //     "email" => "required",
        //     "password" => "required",
        // ]);
       $validate= $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        dd("okay");

        // if ($validate->fails()){
        //     return response()->json([

        //        "errors" => $validate->errors()
        //         ],401);
        // }
            
    }
    //end
}
