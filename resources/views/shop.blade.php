@extends('layouts.app')

@section('title', 'Shop')

@section('content')
<section id="shop">
    <div class="container">
        <div class="products">
            @foreach ($comics as $item)
                <div class="product">
                    <div class="product__img">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    </div>
                    <div class="product__info">
                        <h2>{{$item['title']}}</h2>
                        <p>{{$item['description']}}</p>
                    </div>
                    <div class="product__price">
                        <button><p class="price">{{$item['price']}}</p></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection