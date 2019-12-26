@extends('layouts.app')

@section('content')


    <!-- Bootstrapの定形コード… -->
    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')
        <!-- バリデーションエラーの表示 -->
        <!-- 本登録フォーム -->        
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            
            {{ csrf_field() }}

            <!-- 本のタイトル -->
            <div class="form-group">
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">買うもの</label>
                    <input type="text" name="item_name" id="book-name" class="form-control" value="{{old('item_name')}}">
                </div>
                
                <div class="col-sm-6">
                    <label for="amount" class="col-sm-3 control-label">金額</label>
                    <input type="number" name="item_amount" id="book-amount" class="form-control" value="{{old('item_amount')}}">
                </div>
                
                <div class="col-sm-6">
                    <label for="number" class="col-sm-3 control-label">数</label>
                    <input type="number" name="item_number" id="book-number" class="form-control" value="{{old('item_number')}}">
                </div>
                
                  <div class="col-sm-6">
                    <label for="published" class="col-sm-3 control-label">期限</label>
                    <input type="date" name="published" id="book-published" class="form-control" value="{{old('published')}}">
                </div>    
                
            </div>

            <!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10 ">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> 追加
                    </button>
                    <a href="{{ url('logout') }}" type="submit" class="btn btn-default" method="get">ログアウト</a>
                </div>
            </div>
        </form>



    <!-- 現在の本 -->
    @if (count($books) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                現在の本
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>買うもの</th>
                        <th>金額</th>
                        <th>数</th>
                        <th>期限</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                
                                <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $book->item_name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->item_amount }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->item_number }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $book->published }}</div>
                                </td>
                                <!-- 本: 更新ボタン -->
                                <td>
                                    <form action="{{ url('booksedit/'.$book->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-pencil"></i> 編集
                                        </button>
                                    </form>
                                </td>
                                
                                <!-- 本: 削除ボタン -->
                                <td>
                                    <form action="{{ url('book/'.$book->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i> 削除
                                        </button>
                                    </form>
                                </td>
                                

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {{$books->links()}}
                <div>    
            </div>
        </div>
    @endif
    
    <!-- Book: 既に登録されてる本のリスト -->
    
        </div>
    <!-- 本登録フォームの作成 -->

@endsection
