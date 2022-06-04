@extends('master')
@section('title')
Home
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5 mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <h4 class="mb-0">Hola,write a new blog?...</h4>
                            <p class="text-black-50 mb-0">What's on your mind today?</p>
                        </div>
                        <div class="">
                            <a href="{{route('blog.create')}}" class="btn btn-outline-dark">New Blog</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                @if (session('status'))
                <div class="alert alert-info">{{session('status')}}</div>
                @endif
                @foreach ($blogs as $blog)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h4 class="card-title mb-0">
                                    {{$blog->title}}
                                </h4>
                                <small class="text-black-50">
                                    {{$blog->created_at->diffForHumans()}}
                                </small>
                            </div>
                            <div class="">
                                <div class="dropdown">
                                    <i class="fs-5 fa-solid fa-ellipsis" type='button' id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item text-dark"
                                                href="{{route('blog.edit',$blog->id)}}">Edit</a>
                                        </li>
                                        <li>
                                            <form class="dropdown-item d-inline-block m-0 p-2"
                                                action="{{route('blog.destroy',$blog->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="text-danger m-0 bg-transparent border-0"
                                                    type="submit">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- <img src="{{asset('storage/'.$blog->image)}}" class="img-fluid mb-3" alt="blog-image"> --}}
                        <div class="card-text text-black-50 mb-3">{{Str::words($blog->body,50)}}</div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{route('blog.show',$blog->id)}}" class="btn me-1 btn-sm btn-outline-dark">Details
                                <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="">
                {{$blogs->links()}}
            </div>
        </div>
    </div>
</div>