<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TrashType;
use App\Models\Application;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function admin_applications() {

        $applications = Application::with('trashType')->where('status_app', 3)->paginate(4);

        return view("admin.applications", [
            'applications' => $applications,
        ]);
    }
    
    public function confirm($id_app)
    {

        $application = DB::table('applications')->where('id_app',"=",$id_app)->update(['status_app' => 1]);

        return redirect()->back();
    }
    
    public function deny($id_app)
    {

        $application = DB::table('applications')->where('id_app',"=",$id_app)->update(['status_app' => 2]);

        return redirect()->back();
    }

    public function admin_articles() {

        $articles = Article::paginate(4);

        return view("admin.adminArticle", [
            'articles' => $articles,
        ]);
    }

    public function articles_create(Request $request) {
        $request->validate([
            "articles_title"=> "required",
            "articles_text"=> "required",
            "articles_photo"=> "required",
            ],
            [ 
                "articles_title.required" => "Поле обязательно для заполнения!",
                "articles_text.required" => "Поле обязательно для заполнения!",
                "articles_photo.required" => "Поле обязательно для заполнения!",
        ]);


        $articlesInfo=$request->all();

        $photo = $request->file('articles_photo');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $destinationPath = public_path('images/articles');
        $photo->move($destinationPath, $photoName);

        $articles_create= Article::create([
            "articles_title"=> $articlesInfo["articles_title"],
            "articles_text"=> $articlesInfo["articles_text"],
            "articles_photo"=> $photoName,
        ]);

        if ($articles_create) {
            return redirect()->back()->with("success","");
            
        } else {
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

    }

    public function articles_update(Request $request, $id) {
        $articlesInfo=$request->all();

        $article = Article::find($id);

        $article->articles_title = $articlesInfo['articles_title'];
        $article->articles_text = $articlesInfo['articles_text'];

        $article->save();

        return  redirect()->back()->with('success', 'Статья успешно обновлен.');
    }

    public function articles_delete($id) {
        $article = Article::find($id);

        $article->delete();

        return  redirect()->back()->with('success', 'Статья успешно удалина.');
    }
}
