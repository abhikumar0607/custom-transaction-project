<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //function for view user detail
    public function index(){
        $view =  view('customer.user-profile');
        return $view;
    }

    //function for edit user detail
    public function edit_user(){
        $view =  view('customer.edit-profile');
        return $view;
    }

    //function for update profile
    public function update_user(Request $request){
        $id = $request->id;
        
        // Validate request data
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Max file size in KB (2MB)
             ], [
            'avatar.image' => 'Profile picture must be an image file.',
            'avatar.mimes' => 'Profile picture must be in JPEG, JPG, or PNG format.',
            'avatar.max' => 'Profile picture must not be greater than 2MB in size.',
        ]);
    
        // Check if an image is selected
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $imageName = $filename;
            $file->move('public/uploads/users', $imageName);
    
            // Update data
            $update_user = User::where('id',$id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile' => $request->mobile,
                'avatar' => $imageName,
            ]);
        } else {
            // Update data without changing the profile picture
            $update_user = User::where('id',$id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile' => $request->mobile,
            ]);
        }
    
        // Check if data updated or not
        if($update_user){
            return redirect()->back()->with('success', 'User Profile Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Oops! Something Went Wrong!');
        }
    }
    
}
