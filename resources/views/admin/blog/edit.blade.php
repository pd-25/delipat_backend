@extends('admin.layout.main')
@section('title', 'Edit Blog | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Blog</h5>
                        @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                        <form action="{{ route('blogs.update', $blog->slug) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                           
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog title</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$blog->title}}" name="title" class="form-control" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" cols="30" rows="10">{{$blog->description}}</textarea>
                                    @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog Image</label>
                                <div class="col-sm-10">
                                    <img src="{{asset('storage/'.$blog->image)}}" alt="" height="100px" width="100px">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Update Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control">
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update Blog</button>
                                    <a href="{{route('blogs.index')}}" type="submit" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
