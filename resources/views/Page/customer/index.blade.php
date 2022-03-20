@extends('layouts.app', ['titlePage' => 'Index Customer'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Customer</h3>

                        <div class="card-tools">
                            <a href="{{ route('customer.create') }}" class="btn btn-primary btn-sm">Create</a>
                            <a href="{{ route('customer.export') }}" class="btn btn-primary btn-sm">Export</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datum)
                                    <tr>
                                        <td>{{ $datum->id }}</td>
                                        <td>{{ $datum->name ? $datum->name : '-' }}</td>
                                        <td>{{ $datum->email ? $datum->email : '-' }}</td>
                                        <td>{{ $datum->phone ? $datum->phone : '-' }}</td>
                                        <td>{{ $datum->address }}</td>
                                        <td>{{ $datum->action }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Action</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a class="dropdown-item"
                                                        href="{{ route('customer.show', $datum->id) }}">Detail</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('customer.edit', $datum->id) }}">Edit</a>

                                                    <form action="{{ route('customer.destroy', $datum->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
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