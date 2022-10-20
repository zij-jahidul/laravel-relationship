@extends('layouts.main')

@section('content')
    <div class="container">
        @include('partials.messages')

        <h2 class="my-3">
            My Tasks
            <a class="btn btn-primary btn-sm mx-4" href="">+ New task</a>
        </h2>

        <div class="row">
            {{-- @foreach ($tasks as $task) --}}
                <div class="col-md-4 mb-3">
                    <div class="p-3 shadow">
                        <h4>
                          Hello World
                        </h4>
                        <p>
                            Description
                        </p>
                        <p>
                            {{-- <img src="{{ Storage::url($task->image) }}" alt="" srcset="" width="50" /> --}}
                        </p>
                        <div>
                            <a class="btn btn-success btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm ml-2" data-bs-toggle="modal" href="#deleteModal">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Are you sure ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {{-- Task - <mark>{{ $task->title }}</mark> will be deleted permanently. Are you sure to delete ? --}}
                                </p>
                            </div>
                            <div class="modal-footer">
                                {{-- <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </div>
@endsection
