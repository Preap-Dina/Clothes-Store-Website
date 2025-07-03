<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Laravel\Prompts\Prompt;
use Psy\Readline\Hoa\Console;

class ProductController extends Controller
{
    public function home(){
        $newProducts = Product::query()->OrderBy('id', 'DESC')->paginate(4, ['*'], 'new_page');
        $promoProducts = Product::query()
                        ->whereColumn('regular_price', '<>' , 'sale_price')
                        ->OrderBy('id', 'DESC')
                        ->paginate(4, ['*'], 'promo_page');
        $popProducts = Product::query()
                        ->OrderBy('view', 'DESC')
                        ->paginate(4, ['*'], 'pop_page');
        return view('frontend.home', compact('newProducts', 'promoProducts', 'popProducts'));
    }

    public function productDetail(Product $product){
        
        $product = Product::query()
                        ->where('id', $product->id)
                        ->first();
        $relateProducts = Product::query()
                        ->where('cate_id', $product->cate_id)
                        ->where('id', '!=', $product->id)
                        ->get();

        return view('frontend.product', compact('product', 'relateProducts'));

    }

    public function shop(Request $request){
        if($request->has('cat')){
            $products = Product::query()
                        ->join('categories', 'products.cate_id', '=', 'categories.id')
                        ->where('categories.category_name', $request->cat)
                        ->paginate(6);
        } else {
            $products = Product::query()->paginate(6);
        }

        if($request->has('price')){
            if($request->price == 'max'){
                $products = Product::query()
                            ->orderBy('sale_price', 'DESC')
                            ->paginate(6);
            }elseif ($request->price == 'min'){
                $products = Product::query()
                            ->orderBy('sale_price', 'ASC')
                            ->paginate(6);
            }
        }

        if($request->has('promotion')){
            $products = Product::query()
                        ->whereColumn('sale_price', '!=', 'regular_price')
                        ->paginate(6);
        }

        $cate = Category::all();
        return view('frontend.shop', compact('products', 'cate'));
    }

}
