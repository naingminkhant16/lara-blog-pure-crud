@extends('master')
@section('title')
Details
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5 mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <h4 class="mb-0">Blog Details</h4>
                            <p class="text-black-50 mb-0">Home / Details</p>
                        </div>
                        <div class="">
                            <a href="{{route('blog.index')}}" class="btn btn-outline-dark">Home</a>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="card-text text-black-50 mb-3">{{$blog->body}}</div>
                </div>
            </div>

        </div>
    </div>
</div>