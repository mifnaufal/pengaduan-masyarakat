<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.landing');
    }

    public function login(Request $request){
        $username = Masyarakat::where('username', $request->usernmae)->frist();

        if  ($username) {
            return redirect()->back()->with(['pesan'=> 'Username Not Found']);
        }
        $password = Hash::check($request->password, $username->username);

        if (!password) {
            return redirect()->back()->with(['pesan' => 'Wrong Password']);
        }

        if(Auth::guard('masyarakats')-attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->back();
        } else {
            return redirect()->back()->with(['pesan' => 'Account Not Register']);
        }

    }

    public function formRegister()
    {
        return view('user.register');
    }
}


//     public function register(Request $request)
//     {
//         $validated = $request->validate([
//             'nik' => 'required|string|size:16|unique:masyarakats',
//             'nama' => 'required|string|max:35',
//             'username' => 'required|string|max:25|unique:masyarakats',
//             'password' => 'required|string|min:6',
//             'telp' => 'required|string|max:13'
//         ], [
//             'nik.required' => 'National ID Number is required',
//             'nik.size' => 'National ID Number must be 16 digits',
//             'nik.unique' => 'National ID Number is already registered',
//             'nama.required' => 'Full name is required',
//             'nama.max' => 'Full name cannot exceed 35 characters',
//             'username.required' => 'Username is required',
//             'username.unique' => 'Username is already taken',
//             'username.max' => 'Username cannot exceed 25 characters',
//             'password.required' => 'Password is required',
//             'password.min' => 'Password must be at least 6 characters',
//             'telp.required' => 'Phone number is required',
//             'telp.max' => 'Phone number cannot exceed 13 digits'
//         ]);

//         // Proses registrasi jika validasi berhasil
//         // ...
//     }
// }