<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\Category;

class UserController extends Controller
{
    public function profile(){
    	return view('profiles', array('user' => Auth::user()) );
    }
    public function update_avatar(Request $request){
		// Handle the user upload of avatar
		$categories = Category::all();
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return view('profiles', ['categories' => $categories,'user' => Auth::user()] );
    }
}
