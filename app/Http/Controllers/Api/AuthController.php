<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use App\User;
use Auth;


/**
 * @OA\Post(
 *      path="/register",
 *      operationId="register a user",
 *      tags={"Set Role"},
 *      summary="Create login credentials",
 *      description="Returns list of projects",
 *           @OA\Parameter(
 *          name="name",
 *          description="Fullname",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
*           @OA\Parameter(
 *          name="email",
 *          description="Fullname",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
*           @OA\Parameter(
 *          name="password",
 *          description="Fullname",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @OA\Response(response=400, description="Bad request"),
 *       security={
 *           {"api_key_security_example": {}}
 *       }
 *     )
 *
 * Returns token
 */



class AuthController extends Controller
{
    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             $user = $request->user();
             $data['token'] = $user->createToken('MyApp')->accessToken;
             $data['name']  = $user->name;
             $data['user_data']  = $user;
             return response()->json($data, 200);
         }

       return response()->json(['error'=>'Unauthorized'], 401);
    }

    public function register(Request $request)
    {

      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
      ]);

      if ($validator->fails()) {
          return response()->json(['error'=>$validator->errors()], 401);
      }

      $user = $request->all();
      $user['password'] = Hash::make($user['password']);
      $user = User::create($user);
      $success['token'] =  $user->createToken('MyApp')->accessToken; 
      $success['name'] =  $user->name;

      return response()->json(['success'=>$success], 200); 
    }

    public function userDetail()
    {
        $user = Auth::user();

        return response()->json(['user' => $user], 200);
    }

}