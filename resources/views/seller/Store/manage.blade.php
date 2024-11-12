@extends('seller.layouts.layout')
@section('seller_page_title')
    Manage Category
@endsection
@section('seller_layouts')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"> All Store Create By You</h5>
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
                                <th>Store Name</th>
                                <th>Slug</th>
                                <th>Descriptions</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stores as $store)
                                <tr>
                                    <td>{{$store->id}}</td>
                                    <td>{{$store->store_name}}</td>
                                    <td>{{$store->slug}}</td>
                                    <td>{{$store->details}}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Edit</a>
                                        <form action="" method="POST">
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
