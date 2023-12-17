<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\Models\TrashType;

class ApplicationController extends Controller
{
    public function order() {

        $trashTypes = TrashType::all();
        return view('order', [
            'trashTypes' => $trashTypes]);   
      
    }

    public function order_create(Request $request) {
        $request->validate([
            "date"=> "required",
            "address"=> "required",
            "comment"=> "required",
            ],
            [ 

                "date.required" => "Поле обязательно для заполнения!",

                "address.required" => "Поле обязательно для заполнения!",

                "comment.required" => "Поле обязательно для заполнения!",

        ]);


        $userInfo=$request->all();

        $userId = Auth::user()->id;

        $application_create= Application::create([
            "status_app"=> '3',
            "user_id"=> $userId,
            "address"=> $userInfo["address"],
            "date"=> $userInfo["date"],
            "type_trash"=> $userInfo["type_trash"],
            "comment"=> $userInfo["comment"],
        ]);

        if ($application_create) {
            return redirect("/lk")->with("success","");
        } else {
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

    }
}
