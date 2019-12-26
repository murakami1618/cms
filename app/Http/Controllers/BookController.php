<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request)
    {
            //バリデーション
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'item_name' => 'required|min:1|max:255',
                'item_number' => 'required|min:1|max:7',
                'item_amount' => 'required|max:6',
                'published' => 'required',
        ]);
        //バリデーション:エラー
            if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        //データ更新
        $books = Book::find($request->id);
        $books->item_name   = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published   = $request->published;
        $books->save();
        return redirect('/');
    }



    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'item_name' => 'required|min:1|max:255',
            'item_number' => 'required | min:1 | max:7',
            'item_amount' => 'required | max:6',
            'published'   => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        // Eloquent モデル
        $books = new Book;
       
        $books->item_name =    $request->item_name;
        $books->item_number =  $request->item_number;
        $books->item_amount =  $request->item_amount;
        $books->published =    $request->published;
        $books->user_id =   Auth::id();
        $books->save();   
        //「/」ルートにリダイレクト 
        return redirect('/');
    }
    public function index()
    {
        $name = Auth::user()->name;
        $user_id = Auth::id();
        $books = Book::where('user_id', $user_id)->paginate(5);
        return view('books', [
            'books' => $books,
            'name' => $name
        ]);
    }

    public function edit(Book $books){
            //{books}id 値を取得 => Book $books id 値の1レコード取得
    return view('booksedit', [
        'book' => $books
        ]);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/');
    }
}
