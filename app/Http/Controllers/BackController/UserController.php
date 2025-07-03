<?php

namespace App\Http\Controllers\BackController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class UserController extends Controller
{
    public function login(){
        return view('backend.login');
    }

    public function register(){
        return view('backend.register');
    }

    public function signupSubmit(Request $request){
        $input = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]); 

        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $fileName = time() .'-'. $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $input['profile'] = url('images/'.$fileName);
        } 
        
        $input['password'] = Hash::make($request->password);
        $result = User::create($input);
        if($result){
            return redirect('/login');
        }
        
    }

    public function loginSubmit(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            if(Auth::user()->is_admin){
                return redirect()->route('dashBoard');
            }else{
                return redirect('/');
            }
        }
        return 'Error';
    }

    public function dashBoard(){
        if(Auth::user()->is_admin){
            $users = User::query()->paginate(7);
            $cates = Category::withCount('products')->paginate(7);
            $products = Product::query()
                    ->join('categories', 'products.cate_id', '=', 'categories.id')
                    ->join('users', 'products.user_id', '=', 'users.id')
                    ->select('products.*', 'categories.category_name as category', 'users.profile as profile')
                    ->paginate(7);

            // $catesRelationship = Category::withCount('products')->get();
            $userCount = User::count();
            $cateCount = Category::count();
            $productCount = Product::count();
            return view('backend.dashboard', compact('users', 'cates','products', 'userCount', 'cateCount', 'productCount'));
        }else{
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
