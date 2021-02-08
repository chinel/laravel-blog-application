<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use function redirect;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Auth;


use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function  __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(RegisterRequest $request){
        $request->password = bcrypt($request->password);
        $this->userService->create($request);
        return back()->with(['success'=> 'Registration successful']);
    }

    public function login(LoginRequest $request){
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
