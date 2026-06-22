@extends('layouts.kadai')

@section('pageTitle', 'kadai02_3')
@section('title', 'Bladeテンプレート')

@section('content')
<section>
    <h3 class='text-3xl font-bold py-5 mb-5 border-b-2 border-black'>
        if文による分岐
    </h3>
        <section class='p-5 '>
    @if ($message)
<h4 class='text-xl font-bold mb-2 text-pink-600'>{{ $message }}</h4>
@else
 <h4 class='text-xl font-bold mb-2 text-cyan-600'>変数の値がありません。</h4>
 @endif
 </section>
</section>



<section>
    <h3 class='text-3xl font-bold py-5 mb-5 border-b-2 border-black'>
        foreachによる繰り返し
    </h3>
        <section class='p-5 '>
   @foreach ($data as $d )
   <h4>{{ $d['id'] }}: {{ $d['name'] }}</h4>
   <h3  class='text-xl font-bold mb-2 text-cyan-600'>{{ $d['comment'] }}</p>


   @endforeach


 </section>
</section>
@endsection

