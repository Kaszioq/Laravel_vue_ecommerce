<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


// class AuthController extends Controller
// {

//     public function login(Request $request)
//     {
//         $credentials = $request->validate([
//             'email'=> ['required', 'email'],
//             'password' => 'required',
//             'remember' => 'boolean'
//         ]);
//         var_dump($credentials);
//         $remember = $credentials['remember'] ?? false;
//         unset($credentials['remember']);
//         if (Auth::attempt($credentials, $remember)) {
//             $user = Auth::user();
//             /** @var \App\Models\User $user */
//             $token = $user->createToken('authToken')->accessToken;
            
//             return response()->json([
//                 'user' => $user,
//                 'access_token' => $token
//             ]);
//         }
//         /** @var \App\Models\User $user */

//         $user = Auth::user();
//         if (!$user->is_admin) {
//             Auth::logout();
//             return response([
//                 'message' => 'You don\'t have permission to authenticate as admin'
//             ], 403);
//         }
//         $token = $user->createToken('authToken')->plainTextToken;

//         return response()->json(['error' => 'Unauthorized'], 401);
//     }

//     public function logout(Request $request)
//     {
//         /** @var \App\Models\User $user */
//         $user = Auth::user();
//         $user->deleteToken();

//         return response('', 204);
//     }
// }
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;

            return response()->json([
                'user' => $user,
                'access_token' => $token
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
