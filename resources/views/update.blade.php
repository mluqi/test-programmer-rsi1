@extends('main')
@push('head')
<title>Update Todo</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Update Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.updateData")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Todo</label>
                <input type="text" name="todo" class = "form-control" id="" value="{{$todo->todo}}">
                <label for="" class="form-label mt-4">DateTime</label>
                <input type="date" name="datetime" class = "form-control" id="" value="{{$todo->datetime}}">
                <input type="number" name="id" value="{{$todo->datetime}}" hidden>
                <label for="" class="form-label mt-4">Status</label>
                <input type="text" name="status" value="{{$todo->status}}">
                <button class="btn btn-primary btn-lg mt-4">Update Todo</button>
            </form>
        </div>
    </div>
</div>

@endsection