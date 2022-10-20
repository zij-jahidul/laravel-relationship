@extends('layouts.main')

@section('content')
    <div class="container">
        @include('partials.messages')

        <h2 class="my-3">
            All Categories
            {{-- <a class="btn btn-primary btn-sm mx-4" href="">+ New task</a> --}}
        </h2>

        <h3 class="text-info my-3"> {{ $tag->name }}</h3>

        <div class="row">

            @foreach ($tag->products as $product)
                <div class="col-md-4 mb-3">
                    <div class="p-3 shadow">
                        <h4 class="text-primary">
                            {{ $product->name }}
                        </h4>
                        <h6 class="text-info mb-5">
                            @if ($product->category)
                                <a href="{{ route('category', $product->category_id) }}">
                                    {{ $product->category->name }}</a>
                            @else
                                <p class="text-danger">N/A</p>
                            @endif
                        </h6>
                        <p>
                            tk {{ $product->price }}
                        </p>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
@endsection
