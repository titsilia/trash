<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth() {
        return view("auth");
    }

    
    public function auth_user(Request $request) {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ], [
            "email.required" => "Поле обязательно для заполнения!",
            "email.email" => "Введите корректный email",
            "password.required" => "Поле обязательно для заполнения!",
        ]);

        $user = $request->only("email", "password");
        if (Auth::attempt([
           "email" => $user["email"],
           "password" => $user["password"]
       ]))
       {    
        return redirect("/")->with("success","");
       }
       return redirect()->back()->with("error","Неверный логин или пароль");

    }

    public function register() {
        return view("register");
    }

    public function register_user(Request $request) {
        $request->validate([
            "email"=> "required|unique:users|email",
            "name"=> "required",
            "password"=> "required",
            "confirm_password"=>"required|same:password"
            ],
            [ 
                "name.required" => "Поле обязательно для заполнения!",

                "email.required" => "Поле обязательно для заполнения!",
                "email.email" => "Введите корректный email",
                "email.unique" => "Данный email уже занят",

                "password.required" => "Поле обязательно для заполнения!",
                "confirm_password.required" => "Поле обязательно для заполнения!",
                "confirm_password.same" => "Пароли не совпадают",
        ]);


        $userInfo=$request->all();

        $user_create= User::create([
            "email"=> $userInfo["email"],
            "name"=> $userInfo["name"],
            "password"=> Hash::make($userInfo["password"]),
        ]);

        if ($user_create) {
            return redirect("/auth")->with("success","");
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

    }

    public function exit() {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
