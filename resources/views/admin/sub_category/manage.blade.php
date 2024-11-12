@extends('admin.layouts.layout')
@section('admin_page_title')
    Manage Sub Category
@endsection
@section('admin_layouts')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"> All Sub Category</h5>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>SubCategory</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $subcat)
                                <tr>
                                    <td>{{$subcat->id}}</td>
                                    <td>{{$subcat->subcategory_name}}</td>
                                    <td>{{$subcat->category->category_name}}</td>
                                    <td>
                                        <a href="{{route('show.subcat',$subcat->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{route('delete.subcat',$subcat->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
