
@extends('layouts.kadai')

@section('pageTitle', 'お問い合わせ入力')
@section('title', 'Bladeテンプレート')

@section('content')
    <section>
        <h3 class="text-xl border-b-2 border-sky-400 pb-2 mb-10">お問い合わせフォーム</h3>
        <form action="/kadai04" method="POST">
            @csrf
            <div class="flex justify-between flex-col lg:flex-row items-stretch mb-5">

                <div class="flex flex-col w-full lg:w-6/12 mr-5">
                    <!-- ▼▼問い合わせ種別▼▼ -->
                    <div class="flex flex-col w-full mb-5">
                        <label class="text-gray-400 text-sm">種別</label>
                        <select name="course" class="w-full h-10 px-3 border-2 border-gray-200 rounded-md outline-none">
                            <option value="1">質問</option>
                            <option value="2">要望</option>
                            <option value="3">その他</option>
                        </select>
                    </div>
                    <!-- ▲▲種別▲▲ -->
                    <!-- ▼▼氏名▼▼ -->
                    <div class="flex flex-col w-full mb-5">
                        <label class="text-gray-400 text-sm">氏名<em class="text-pink-600">※</em></label>
                        <!-- TODO:oldヘルパー -->
                        <input type="text" name="name" value="{{old('name')}}"
                            class="w-full h-10 px-3 text-lg border-2 border-gray-200 rounded-md outline-none">
                        <!-- TODO:エラーメッセージ(errorヘルパー) -->
                          @error('name')

                        <div>{{$message}}</div>
                    @enderror
                    </div>

                    <!-- ▲▲氏名▲▲ -->
                    <!-- ▼▼メールアドレス▼▼ -->
                    <div class="flex flex-col w-full mb-5">
                        <label class="text-gray-400 text-sm">メールアドレス<em class="text-xs text-pink-600">※</em></label>
                        <!-- TODO:oldヘルパー -->
                        <input type="text" name="email" value="{{old('email')}}"
                            class="w-full h-10 px-3 text-lg border-2 border-gray-200 rounded-md outline-none">
                        <!-- TODO:エラーメッセージ(errorヘルパー) -->
                        @error('email')

                        <div>{{$message}}</div>
                    @enderror

                    </div>
                    <!-- ▲▲メールアドレス▲▲ -->

                </div>

                <div class="flex flex-col items-stretch flex-grow">

                    <!-- ▼▼件名▼▼ -->
                    <div class="flex flex-col w-full mb-5">
                        <label class="text-gray-400 text-sm">件名</label>
                        <!-- TODO:oldヘルパー -->
                        <input type="text" name="title" value="{{old('title')}}"
                            class="w-full h-10 px-3 text-lg border-2 border-gray-200 rounded-md outline-none">
                    </div>
                    <!-- ▲▲件名▲▲ -->

                    <!-- ▼▼内容▼▼ -->
                    <div class="flex flex-col items-stretch flex-grow">
                        <label class="text-gray-400 text-sm">内容</label>
                        <textarea name="note" class="w-full h-40 lg:h-full text-lg px-2 py-2 border-2 border-gray-200 rounded-md">{{old('note')}}</textarea>
                        <!-- TODO:エラーメッセージ(errorヘルパー) -->
                          @error('note')

                        <div>{{$message}}</div>
                    @enderror
                    </div>
                    <!-- ▲▲内容▲▲ -->
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white text-center leading-10 bg-pink-600 px-10 hover:bg-pink-500 rounded-md">送信</button>
            </div>
        </form>

    </section>
@endsection

