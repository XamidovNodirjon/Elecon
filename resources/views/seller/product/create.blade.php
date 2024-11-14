@extends('seller.layouts.layout')

@section('seller_page_title')
    Add Product
@endsection
@section('seller_layouts')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"> Create Product</h5>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show">
                            <ul>
                                @foreach($errors ->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <label for="product_name" class="fw-bold mb-2">Giv Name of Your Product</label>
                        <input type="text" class="form-control mt-2" name="product_name" placeholder="Lenovo IdealPad 5 Pro">

                        <label for="description" class="fw-bold mb-2">Giv Name of Your Product</label>
                        <textarea name="description" class="form-control mt-2" id="description" cols="30" rows="10"></textarea>

                        <label for="sku" class="fw-bold mb-2">SKU</label>
                        <input type="text" class="form-control mt-2" name="sku" placeholder="LXD3402    ">

                        <livewire:category-subcategory/>

                        <label for="store_id" class="fw-bold mb-2">Select Your Store For This Product</label>
                        <select name="store_id" id="store_id" class="form-control mb-2">
                            @foreach($stores as $store)
                            <option value="{{$store->id}}">{{$store->store_name}}</option>
                            @endforeach

                        </select>


                        <button type="submit" class="btn btn-primary w-100 mt-2"> Add Product</button>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
