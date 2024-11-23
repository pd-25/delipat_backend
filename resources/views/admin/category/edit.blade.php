@extends('admin.layout.main')
@section('title', 'Create Product | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Category</h5>
                        <form action="{{ route('category-mamages.update', $category->slug) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                           
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{$category->name}}" >
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                        <option value="">--select--</option>
                                        <option {{$category->status == 1 ? "selected" : ""}} value="1">Active</option>
                                        <option {{$category->status == 0 ? "selected" : ""}} value="0">In-Active</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save Category</button>
                                    <a href="{{route('category-mamages.index')}}" type="submit" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
