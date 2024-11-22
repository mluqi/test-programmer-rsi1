@extends('main')
@push('head')
<title>Add Todo </title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.store")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Todo</label>
                <input type="text" name="todo" class = "form-control" id="">
                    <div class="text-danger">
                        @error('todo')
                            {{$message}}
                        @enderror
                    </div>
                <label for="" class="form-label mt-4">Datetime</label>
                <input type="date" name="datetime" class = "form-control" id="">
                <div class="text-danger">
                            @error('datetime')
                                {{$message}}
                            @enderror
                    </div>
                <label for="" class="form-label mt-4">Status</label>
                <input type="text" name="status" class = "form-control" id="">
                <div class="text-danger">
                        @error('status')
                            {{$message}}
                        @enderror
                    </div>
                <label for="" class="form-label mt-4">Tahun</label>
                <input type="text" name="status" class = "form-control" id="">
                <div class="text-danger">
                        @error('tahun')
                            {{$message}}
                        @enderror
                    </div>
                <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
            </form>
        </div>
    </div>
</div>

@endsection