<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getForm() {
    	return view('dang-nhap');
    }
    public function logout(Type $var = null){
    
        Section::flush();
        return redirect('/dang-nhap');
    }

    public function postForm(Request $request) {
        $username = $request->username;
        $password = $request->password;
        
        $user = User::where('username', '=', $username)->first();

        // if tồn tài username
        if ($user) {

            // mã hóa password
            if (Hash::check($password, $user->password)) {
                //dang nhap thanh cong
                //gan session
                $request->session()->put('user', $username);
                return view('admin');
            } else {
                // sai thong tin dang nhap
                return view('dang-nhap')->with('error', 'Sai thông tin đăng nhập');
            }
        } else {
            return view('dang-nhap')->with('error', 'Sai thông tin đăng nhập');
        }

       
    }
    

}
