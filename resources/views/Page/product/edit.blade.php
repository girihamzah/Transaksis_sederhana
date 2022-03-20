@extends('layouts.app', ['titlePage' => 'Edit Product'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Product</h3>
                </div>
                <form action="{{ route('product.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name', $data->name) }}">
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Image :</label>
                            <input type="file" name="image" class="form-control">
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Category :</label>
                            <select class="form-control" name="category_id" id="">
                                @foreach($categories as $category)
                                    <option value="{{ $data->category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit :</label>
                            <select class="form-control" name="unit_id" id="">
                                @foreach($units as $unit)
                                    <option value="{{ $data->unit->id }}">
                                        {{ $unit->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Brand :</label>
                            <select class="form-control" name="brand_id" id="">
                                @foreach($brands as $brand)
                                    <option value="{{ $data->brand->id }}">
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Price :</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter Name" value="{{ old('price', $data->price) }}">
                            @if($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Stock :</label>
                            <input type="text" name="stock" class="form-control" placeholder="Enter stock" value="{{ old('stock', $data->stock) }}">
                            @if($errors->has('stock'))
                                <span class="text-danger">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection