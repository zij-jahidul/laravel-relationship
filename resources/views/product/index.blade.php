@extends('layouts.main')

@section('content')
    <div class="container">
        @include('partials.messages')

        <h2 class="my-3">
            All Products

        </h2>



        <div class="row">
            <div class="col-lg-12">
                <form method="GET">
                    <input type="search" class="mb-2" name="s" value="{{ request()->s }}">
                </form>
            </div>
            @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="p-3 shadow">
                        <h4 class="text-primary">
                            {{ $product->name }}
                        </h4>
                        <h6 class="text-info mb-5">
                            @if ($product->category)
                                <a href="{{ route('category', $product->category_id) }}"> {{ $product->category_name }}</a>
                            @else
                                <p class="text-danger">N/A</p>
                            @endif
                        </h6>
                        <p>
                            tk {{ $product->price }}
                        </p>

                        <h6 class="text-info mb-5">

                            @foreach ($product->tags as $tag)
                                <a href="{{ route('tag', $tag->id) }}"
                                    class="bg-primary text-white mx-1 btn btn-sm">{{ $tag->name }}</a>
                            @endforeach

                        </h6>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
