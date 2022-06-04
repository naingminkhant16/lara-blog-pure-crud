@extends('master')
@section('title')
Edit
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <h4 class="mb-0">Edit Blog!</h4>
                            <p class="text-black-50 mb-0">Home / Edit</p>
                        </div>
                        <div class="">
                            <a href="{{route('blog.index')}}" class="btn btn-outline-dark">Home</a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card mt-4">
                <div class="card-body">
                    <form action="{{route('blog.update',$blog->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control @error('title')
                            is-invalid
                            @enderror" value="{{$blog->title}}" name="title">
                            @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Body</label>
                            <textarea name="body" rows="10" class="form-control @error('body')
                            is-invalid
                            @enderror">{{$blog->body}}</textarea>
                            @error('body')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" value="{{$blog->image}}">
                        </div> --}}
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>