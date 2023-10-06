<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //データベースアクセスの利用
use App\Models\userinfos; //userinfosモデルの利用
use Illuminate\Support\Facades\Session; //session管理の利用

class LoginController extends Controller
{   
    public function index()
    {
        return view('userLogin');
    }

    public function showForm()
    {
        return view('userLogin'); //userLoginビューのフォームを表示
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // データベースからデータを検索
        $result = DB::table('userinfos')
            ->where('email', $email)
            ->where('password', $password)
            ->get();

        if ($result->isEmpty()) {
            // データが見つからない場合の処理
            return redirect()->route('login')->with('error', '情報が一致しません');
        }

        // データが見つかった場合の処理
        // データをセッションに格納
        Session::put('login_result', $result);

        //return redirect()->route('login')->with('success', 'ログインしました');
        //return view('userLogin')->with(['success' => 'データが一致しました。', 'result' => $result]);
        //return view('sessionView', ['result' => $result]);
        return redirect('/');
    }
}
