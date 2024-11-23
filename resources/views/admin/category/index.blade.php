@extends('admin.layout.main')
@section('title', 'All Categories | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Categories</h5>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('category-mamages.create') }}">New
                            Product</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td><span class='{{$category->status ==1 ? "text-success" : "text-danger"}}'>{{$category->status ==1 ? "Active" : "InActive"}}</span></td>

                                        <td>
                                            <a href="{{ route('category-mamages.edit', $category->slug) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('category-mamages.destroy', $category->slug) }}"
                                                class="d-inline-block pl-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm"
                                                    data-toggle="tooltip" title='Delete'>

                                                    <i class="ri-delete-bin-2-fill"></i>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        No Record Found
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
