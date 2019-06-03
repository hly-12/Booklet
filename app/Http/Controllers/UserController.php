<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Storage; 
class UserController extends Controller
{
    public function profile(){
    	return view('profiles', array('user' => Auth::user()) );
    }
    public function update_avatar(Request $request){
		// Handle the user upload of avatar
		$categories = Category::all();
    	
    return view('profiles', ['categories' => $categories,'user' => Auth::user()] );
		}
		
		public function edit(Request $request){
			
				$user = User::find($request->id_user);
				$user->name = $request->input('name');
				$user->email = $request->input('email');
				$user->BIOs = $request->input('BIOs');
				$user->Carrer = $request->input('Carrer');
				
				// if($request->hasFile('avatar')){
					$avatar = $request->file('avatar');
					$filename = time() . '.' . $avatar->getClientOriginalExtension();
					Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
					$user->avatar = $filename;

					//
				// 	$filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     $filename = pathinfo( $filenameWithExt,PATHINFO_FILENAME);
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     $fileNameToStrore = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStrore);
				
				// }
    		$user->save();
				$categories = Category::all();
				return redirect('/');
    	
    
		
		}
}
