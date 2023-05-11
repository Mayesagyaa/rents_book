<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $bookCount = Books::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('dashboard.index', ['book_count'=>$bookCount, 'category_count'=>$categoryCount, 'user_count'=>$userCount]);
    }

    public function indexUsers(){
        $data = User::get();

        return view('dashboard.user', compact('data'));
    }

    public function indexEditUser($id){
        $data = User::where('id',$id)->first();
        return view ('dashboard.edit-user', compact('data'));
    }

    public function updateIndex(Request $request , $id){

        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address           
        ]);

        return redirect(route('indexUser'));
    }

    public function delete($id){
        User::where('id',$id)->delete();
        return redirect(route('indexUser'));
}

public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect('/login');
    }
}