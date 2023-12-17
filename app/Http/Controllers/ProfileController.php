<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;
use App\Models\TrashType;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function lk() {
        $userId = Auth::user()->id;

        $user = User::find($userId);
        $applications = $user->application()->with('trashType')->with('statusApp')->paginate(2);

        return view("lk", [
            'applications' => $applications,
        ]);
    }

    public function lk_update(Request $request) {
        $userInfo=$request->all();

        $user = Auth::user();

        $user->telephone = $userInfo['telephone'];
        $user->email = $userInfo['email'];
        $user->name = $userInfo['name'];
        $user->surname = $userInfo['surname'];
        $user->password = Hash::make($userInfo["password"]);

        $user->save();

        return redirect("/lk")->with('success', 'Профиль успешно обновлен.');
    }
}
