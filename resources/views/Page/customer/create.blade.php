@extends('layouts.app', ['titlePage' => 'Create Customer'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Customer</h3>
                    </div>
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @if($errors->('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Phone :</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{ ('phone') }}">
                                @if($errors->('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Address :</label>
                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ ('address') }}">
                                @if($errors->('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
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