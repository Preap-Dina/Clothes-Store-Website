<?php

namespace App\Http\Controllers\BackController;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function changeLogo(){
        $logo = Logo::query()->orderBy('id', 'DESC')->first();
        return view('backend.changeLogo', compact('logo'));
    }

    public function changeLogoSubmit(Request $request){
        $input = $request->all();
        $input = $request->validate([
            'logo' => 'required',
        ]);

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            $input['logo'] = url('images/'.$fileName);

            $insert = Logo::create($input);
            if($insert){
                return redirect('/admin/change-logo')->with('success', 'Changed Logo Successfully');
            }
        }

    }
}
