@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="my-3">New Task</h2>

        <div class="shadow p-5">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include('partials.messages')

                <div class="mb-3">
                    <label for="status" class="form-label">
                        Category Id
                    </label>
                    <select name="category_id" id="status" class="form-control">
                        <option disabled>--SELECET CATEGORY--</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>


                <div class="mb-3">
                    <label for="status" class="form-label">
                        Tags
                    </label>
                    <select name="tags[]" id="js-example-basic-multiple" class="form-control" multiple="multiple">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="Name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Write task Name"
                        value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Price</label>
                    <input type="number" class="form-control" id="number" name="price" placeholder="Price"
                        value="{{ old('price') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Product description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>

                </div>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#js-example-basic-multiple').select2();
        });
    </script>
@endsection
