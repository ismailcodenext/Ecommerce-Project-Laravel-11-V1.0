<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProductCategoryController extends Controller
{
    public function ProductCategoryCreate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $img = $request->file('img');
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$user_id}-{$t}-{$file_name}";
            $img_url = "uploads/category_img/{$img_name}";

            // Upload File
            $img->move(public_path('uploads/category_img'), $img_name);

            Categories::create([
                'category_name' => $request->input('category_name'),
                'category_img' => $img_url,
                'user_id' => $user_id
            ]);

            return response()->json(['status' => 'success', 'message' => "Product Category Created Successfully"]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    public function ProductCategoryList()
    {
        try {
            $user_id = Auth::id();
            $ProductCategoryData = Categories::get();
            return response()->json(['status' => 'success', 'ProductCategoryData' => $ProductCategoryData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    function ProductCategoryById(Request $request){
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = Categories::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProductCategoryUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $ProductData_Update = Categories::find($request->input('id'));

//            if (!$DoctorData_Update || $DoctorData_Update->user_id != $user_id) {
//                return response()->json(['status' => 'fail', 'message' => 'Doctor Page not found or unauthorized access.']);
//            }

            // Update the cast information
            $ProductData_Update->category_name = $request->input('category_name');

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/category_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/category_img/'),$img_name);


                if ($ProductData_Update->category_img && file_exists(public_path($ProductData_Update->category_img))) {
                    unlink(public_path($ProductData_Update->category_img));
                }
                $ProductData_Update->category_img = $img_url;
            }


            $ProductData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Product Category Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProductCategoryDelete(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|string|min:1'
            ]);

            $doctor_id = $request->input('id');
            $doctor_delete = Categories::find($doctor_id);

            if (!$doctor_delete) {
                return response()->json(['status' => 'fail', 'message' => 'Category not found.']);
            }

            if ($doctor_delete->category_img && file_exists(public_path($doctor_delete->category_img))) {
                unlink(public_path($doctor_delete->category_img));
            }

            Categories::where('id', $doctor_id)->delete();

            return response()->json(['status' => 'success', 'message' => 'Product Category Delete Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }






}
