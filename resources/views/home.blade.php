@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<section class="homepage">
    <section id="jumbotron">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron">
    </section>
    <section id="CS">
        <div class="container">
            <h2 id="CS__title">Current Series</h2>
            <div class="CS__series">
                @foreach ($comics as $item)
                <div class="CS__item">
                    <div class="CS__img">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    </div>
                    <div class="CS__titolo">{{$item['title']}}</div>
                </div>
                @endforeach
            </div>
            <div class="CS__button">
                <button>Load More</button>
            </div>
        </div>
    </section>
    @include('partials.features')
</section>

@endsection