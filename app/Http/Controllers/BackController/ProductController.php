<?php

namespace App\Http\Controllers\BackController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function listProduct(){
        $products = Product::query()
                    ->join('categories', 'products.cate_id', '=', 'categories.id')
                    ->join('users', 'products.user_id', '=', 'users.id')
                    ->select('products.*', 'categories.category_name as category', 'users.profile as profile')
                    ->paginate(7);
        return view('backend.listProduct', compact('products'));
    }

    public function addProduct(){
        $category = Category::all();
        return view('backend.addProduct', compact('category'));
    }

    public function addProductSubmit(Request $request){
        $input = $request->all();
        $input = $request->validate([
            'product_name' => 'required',
            'qty' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'nullable',
            'cate_id' => 'required',
            'size' => 'required|max:50',
            'color' => 'required|max:50',
            'description' => 'required'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            $input['image'] = url('images/'.$fileName);
        }else{
            $input['image'] = $request->old_image;
        }

        $input['size'] = implode(',', $request->size);
        $input['color'] = implode(',', $request->color);
        $input['user_id'] = auth()->user()->id;
        $btn = $request->btn;
        if($btn=='Add Product'){
            $insert = Product::create($input);
            if($insert){
                return redirect('/admin/add-product')->with('success', 'Product Added Successfully');
            }
        }else{
            $id=$request->hidden_id;
            $update = Product::query()->where('id', $id)->update($input);
            if($update){
                return redirect('/admin/add-product')->with('success', 'Product Updated Successfully');
            }
        }
    }

    public function deleteProduct(Request $request){
        $id = $request->remove_id;
        $delete = Product::query()->where('id', $id)->delete();
        if($delete){
            return redirect('/admin/list-product')->with('Success', 'Product Deleted Successfully');
        }else{
            return redirect('/admin/list-product')->with('Error', 'Product Deleted Fail');

        }
    }

    public function editProduct(Product $product){
        $getCate = Product::query() 
                    ->join('categories', 'products.cate_id', '=' , 'categories.id')
                    ->select('products.*', 'categories.category_name as category')
                    ->where('products.id', $product->id)
                    ->first();

        $size=explode(',', $product->size);
        $color=explode(',', $product->color);
        $category=Category::query()->get();
        return view('backend.addProduct', compact('getCate' , 'category' , 'size', 'color'));
    }
}
