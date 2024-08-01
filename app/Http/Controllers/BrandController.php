<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function BrandCreate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $img = $request->file('img');
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$user_id}-{$t}-{$file_name}";
            $img_url = "uploads/brand_img/{$img_name}";

            // Upload File
            $img->move(public_path('uploads/brand_img'), $img_name);

            Brands::create([
                'brand_name' => $request->input('brand_name'),
                'brand_img' => $img_url,
                'user_id' => $user_id
            ]);

            return response()->json(['status' => 'success', 'message' => "Brand Created Successfully"]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    public function BrandList()
    {
        try {
            $user_id = Auth::id();
            $BrandData = Brands::get();
            return response()->json(['status' => 'success', 'BrandData' => $BrandData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    function BrandById(Request $request){
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = Brands::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function BrandUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $BrandData_Update = Brands::find($request->input('id'));

//            if (!$DoctorData_Update || $DoctorData_Update->user_id != $user_id) {
//                return response()->json(['status' => 'fail', 'message' => 'Doctor Page not found or unauthorized access.']);
//            }

            // Update the cast information
            $BrandData_Update->brand_name = $request->input('brand_name');

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/brand_img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/brand_img/'),$img_name);


                if ($BrandData_Update->brand_img && file_exists(public_path($BrandData_Update->brand_img))) {
                    unlink(public_path($BrandData_Update->brand_img));
                }
                $BrandData_Update->brand_img = $img_url;
            }


            $BrandData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Brand Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function BrandDelete(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|string|min:1'
            ]);

            $brand_id = $request->input('id');
            $brand_delete = Brands::find($brand_id);

            if (!$brand_delete) {
                return response()->json(['status' => 'fail', 'message' => 'Brand not found.']);
            }

            if ($brand_delete->brand_img && file_exists(public_path($brand_delete->brand_img))) {
                unlink(public_path($brand_delete->brand_img));
            }

            Brands::where('id', $brand_id)->delete();

            return response()->json(['status' => 'success', 'message' => 'Brand Delete Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



}
