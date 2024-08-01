<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserRegistration(Request $request)
    {
        try {
            $img = $request->file('img');
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$t}-{$file_name}";
            $img_url = "uploads/user-img/{$img_name}";
            $img->move(public_path('uploads/user-img'), $img_name);

            $user = new User([
                'img_url' => $img_url,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role'), // Set the role based on user input
                'status' => $request->input('status'), // Default status to pending
            ]);

            $user->save();

            return response()->json(['status' => 'success', 'message' => 'User Registration Successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function UserLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email|max:50',
                'password' => 'required|string|min:3'
            ]);

            $user = User::where('email', $request->input('email'))->first();

            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return response()->json(['status' => 'failed', 'message' => 'Invalid User']);
            }

            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['status' => 'success', 'message' => 'Login Successful', 'token' => $token]);

        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function UserProfile(Request $request)
    {
        return Auth::user();
    }


    public function UpdateProfile(Request $request)
    {
        try {
            // $request->validate([
            //     'name' => 'required|string|max:50',
            //     'mobile' => 'required|string|max:50',
            //     'password' => 'nullable|string|min:3|confirmed', // Add password validation
            // ]);

            // Get the currently authenticated user
            $user = Auth::user();

            // Update user profile details
            $user->name = $request->input('name');
            $user->mobile = $request->input('mobile');
            $user->email = $request->input('email');

            // Check if a new password is provided
            if ($request->filled('password')) {
                $user->password = Hash::make($request->input('password'));
            }

            // Save the updated user details
            $user->save();

            return response()->json(['status' => 'success', 'message' => 'Profile Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

}
