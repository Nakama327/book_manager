<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookinfos; 
use App\Models\userinfos;
use App\Models\reviewinfos;


class BooksAllController extends Controller
{
    public function index()
    {
        $records = bookinfos::all(); // ここで$recordsを定義する
        return view('booksAll', compact('records')); // ここで$recordsをviewに渡す
    }
    public function booksAll()
    {
        $data = [
            'records' => bookinfos::all()
        ];
        return view('booksAll', $data); // ここで$dataをviewに渡す
    }

    public function booksShow( $id )
    {
        $record = bookinfos::find($id);
        $reviews = reviewinfos::where('book_id', $id)->get();

        //レビューに関連するユーザー情報を取得
        $users = userinfos::whereIn('id', $reviews->pluck('user_id'))->get();
        
        //ユーザー名を配列に整理
        $usernames = $users->pluck('username', 'id');

        $data = [
            'record' => $record,
            'reviews' => $reviews,
            'usernames' => $usernames
        ];
        return view('booksShow', $data);  //$dataをviewに渡す
    }

    public function reviewCreate( request $book_id )
    {
        return view('reviewCreate', $book_id);
    }

    public function reviewStore( Request $req )
    {
        $login_user = $req->session()->get('login_result');
        $user_id = $login_user->first()->id;
        $book_id = $req->book_id;
        $recommned = $req->input('recommend');
        $comment = $req->comment;

        //モデルオブジェクトを作成する
        $review = new reviewinfos();
        //フィールドに値を代入
        $review->user_id = $user_id;
        $review->book_id = $book_id;
        $review->recommend = $recommned;
        $review->comment = $comment;
        //テーブルにデータを保存
        $review->save();

        //成功メッセージを設定
        $message = 'レビューを投稿しました';
        session()->flash('success_message', $message);
        //詳細ページにリダイレクト
        return redirect()->route('books.show', ['id' => $book_id]);
    }


}
