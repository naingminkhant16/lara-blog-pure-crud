@extends('master')
@section('title')
Create
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <h4 class="mb-0">Creat a new Blog!</h4>
                            <p class="text-black-50 mb-0">Home / Create</p>
                        </div>
                        <div class="">
                            <a href="{{route('blog.index')}}" class="btn btn-outline-dark">Home</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <form action="{{route('blog.create')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Body</label>
                            <textarea name="body" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-dark">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>