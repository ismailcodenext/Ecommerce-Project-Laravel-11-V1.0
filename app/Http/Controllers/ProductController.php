<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Hoa\Exception;

class ProductController extends Controller
{



    public function index()
    {
        try {
            $ProductFront_Data = Product::latest()->get();
            return response()->json(['status' => 'success', 'ProductFront_Data' => $ProductFront_Data]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



    public function ProductList()
    {
        try {
            $user_id = Auth::id();
            $ProductData = Product::get();
            return response()->json(['status' => 'success', 'ProductData' => $ProductData]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    public function ProductCreate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $img = $request->file('img');
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$user_id}-{$t}-{$file_name}";
            $img_url = "uploads/Product-img/{$img_name}";
            $img->move(public_path('uploads/Product-img'), $img_name);

            Product::create([
                'img_url' => $img_url,
                'product_name' => $request->input('product_name'),
                'bd_price' => $request->input('bd_price'),
                'usd_price' => $request->input('usd_price'),
                'product_code' => $request->input('product_code'),
                'status' => $request->input('status'),
                'description' => $request->input('description'),
                'stock' => $request->input('stock'),
                'user_id' => $user_id
            ]);
            return response()->json(['status' => 'success', 'message' => 'Product Create Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProductById(Request $request)
    {
        try {
            $user_id = Auth::id();
            $request->validate(["id" => 'required|string']);

            $rows = Product::where('id', $request->input('id'))->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProductUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $ProductData_Update = Product::find($request->input('id'));

            //            if (!$ProductData_Update || $ProductData_Update->user_id != $user_id) {
//                return response()->json(['status' => 'fail', 'message' => 'Product Page not found or unauthorized access.']);
//            }

            // Update the cast information
            $ProductData_Update->product_name = $request->input('product_name');
            $ProductData_Update->bd_price = $request->input('bd_price');
            $ProductData_Update->usd_price = $request->input('usd_price');
            $ProductData_Update->product_code = $request->input('product_code');
            $ProductData_Update->description = $request->input('description');
            $ProductData_Update->stock = $request->input('stock');
            $ProductData_Update->status = $request->input('status');

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $t = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$t}-{$file_name}";
                $img_url = "uploads/Product-img/{$img_name}";

                // Upload File
                $img->move(public_path('uploads/Product-img'), $img_name);


                if ($ProductData_Update->img_url && file_exists(public_path($ProductData_Update->img_url))) {
                    unlink(public_path($ProductData_Update->img_url));
                }
                $ProductData_Update->img_url = $img_url;
            }


            $ProductData_Update->save();

            return response()->json(['status' => 'success', 'message' => 'Product Update Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProductDelete(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|string|min:1'
            ]);

            $Product_id = $request->input('id');
            $Product_delete = Product::find($Product_id);

            if (!$Product_delete) {
                return response()->json(['status' => 'fail', 'message' => 'Product not found.']);
            }

            if ($Product_delete->img_url && file_exists(public_path($Product_delete->img_url))) {
                unlink(public_path($Product_delete->img_url));
            }

            Product::where('id', $Product_id)->delete();

            return response()->json(['status' => 'success', 'message' => 'Product Delete Successful']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }




}
