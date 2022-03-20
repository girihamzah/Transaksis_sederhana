@extends('layouts.app', ['titlePage' => 'Show Customer'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Product</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>{{ $data->image }}</td>
                                </tr>
                                <tr>
                                    <td>Category Id</td>
                                    <td>{{ $data->category_id }}</td>
                                </tr>
                                <tr>
                                    <td>Brand</td>
                                    <td>{{ $data->brand_id }}</td>
                                </tr>
                                <tr>
                                    <td>Unit</td>
                                    <td>{{ $data->unit_id }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>{{ $data->Price }}</td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td>{{ $data->stock }}</td>
                                </tr>
                                <tr>
                                    <td>image</td>
                                    <td>{{ $data->image }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated At</td>
                                    <td>{{ $data->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection