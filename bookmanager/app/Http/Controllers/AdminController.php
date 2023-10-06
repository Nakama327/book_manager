<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; //session管理の利用
use App\Models\bookinfos; 

class AdminController extends Controller
{
    public function index()
    {
        // ログイン情報をセッションから取得
        $result = Session::get('login_result');

        // ログイン情報が存在しないか、"se"の値が1以外の場合はTopにリダイレクト
        if (!$result || $result[0]->se !== 1) {
            return redirect()->route('top')->with('error', '管理者権限が必要です');
        }

        return view('admin');
    }

    //新規登録メソッド
    public function store(Request $request)
    {
            //バリデーション
        $request->validate([
            'image_path' => 'nullable|url', // 画像ファイルパスはNULLかURLであること
            'title' => 'required|string|max:255', // タイトルは必須で文字列で最大255文字
            'author' => 'required|string|max:255', // 著者は必須で文字列で最大255文字
            'publisher' => 'required|string|max:255', // 出版社は必須で文字列で最大255文字
            'date' => 'required|date', // 日付は必須で日付形式であること
            'isbn' => 'required|string|size:14|unique:bookinfos,isbn', // ISBNは必須で文字列で14文字(13桁＋ハイフン)でbookinfosテーブルのisbnカラムと重複しないこと
        ]);
        
        $bookinfos = new Bookinfos;
        $bookinfos->image_path = $request->input('image_path');
        $bookinfos->title = $request->input('title');
        $bookinfos->author = $request->input('author');
        $bookinfos->publisher = $request->input('publisher');
        $bookinfos->date = $request->input('date');
        $bookinfos->isbn = $request->input('isbn');

        // データベースに保存
        $bookinfos->save();
                
        return redirect()->route('admin')->with('success', '保存しました');
    }


    //削除用メソッド
    public function destroy(Request $request)
    {
        //バリデーション
        $request->validate([
            'id_delete' => 'required|integer|exists:bookinfos,id', // idは必須で整数でbookinfosテーブルのidカラムに存在すること
            'isbn_delete' => 'required|string|size:14|exists:bookinfos,isbn', // isbnは必須で文字列で14文字(13桁＋ハイフン)でbookinfosテーブルのisbnカラムに存在すること
        ]);
        
        $bookinfos = bookinfos::where('id', $request->id_delete)->where('isbn', $request->isbn_delete)->first(); // idとisbnが一致するレコードを取得
        if ($bookinfos) { // レコードが存在する場合
            $bookinfos->delete(); // レコードを削除
            // 成功時
            return redirect()->route('admin')->with('success', '削除しました');
        } else { // レコードが存在しない場合
            // 失敗時
            return redirect()->route('admin')->with('error', '該当するレコードがありません');
        }
    }


}
