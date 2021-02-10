<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use function redirect;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function  __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(RegisterRequest $request){
        $userData = $request->all();
        $userData['password'] = bcrypt($request->password);
        $this->userService->create($userData);
        Session::flash('success','Registration successful. Please Login');
        return redirect('/auth/login');
    }

    public function login(LoginRequest $request){php artisan make:command ImportPosts --command=import:posts
         if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
             return redirect('/dashboard');
         }
         else{
             return back()->with(['error'=> 'Invalid Email or Password']);
         }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }


}
